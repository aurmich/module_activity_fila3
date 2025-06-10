# Event Sourcing in Modern Applications

## Introduction to Event Sourcing
Event Sourcing is an architectural pattern where application state is derived from a sequence of events. Instead of storing the current state in a database, the application stores all events that led to the current state. This approach is particularly beneficial in contexts requiring detailed tracking, auditing, and historical data analysis.

### Key Concepts
- **Events**: Discrete actions or changes in the system (e.g., `UserRegistered`, `AppointmentScheduled`).
- **Event Store**: A database or log where all events are stored in sequence.
- **Aggregates**: Domain objects that handle commands and produce events (e.g., a `User` aggregate).
- **Projectors**: Components that listen to events and build read models or projections for querying.
- **Reactors**: Components that react to events to trigger side effects (e.g., sending notifications).

### Benefits for Applications
- **Audit Trail**: Every action is recorded, crucial for compliance with regulations.
- **Reconstruction**: Ability to reconstruct past states for debugging or analysis.
- **Flexibility**: Easy to extend with new features by adding new event types and projectors.
- **Accuracy**: Ensures data integrity by replaying events to validate current state.

## Spatie Laravel Event Sourcing
The `spatie/laravel-event-sourcing` package provides a robust implementation of event sourcing for Laravel applications. It simplifies creating aggregates, storing events, and building projections.

### Installation
```bash
composer require spatie/laravel-event-sourcing
php artisan vendor:publish --provider="Spatie\EventSourcing\EventSourcingServiceProvider" --tag="event-sourcing-migrations"
php artisan migrate
```

### Core Components
1. **Aggregates**: Represent domain entities and handle business logic.
2. **Events**: Define what happened in the system.
3. **Projectors**: Build read models from events for efficient querying.
4. **Reactors**: Perform side effects when events occur.

## Application in Multi-Module Projects
In a modular application, event sourcing can be applied to:

1. **User Activity Tracking**
   - Record user registrations, logins, and profile updates
   - Track consent changes and privacy preferences

2. **Resource Management**
   - Monitor appointment scheduling, modifications, and cancellations
   - Track resource allocation and availability

3. **Data Changes**
   - Record all modifications to critical data
   - Maintain history of status changes

4. **System Interactions**
   - Log API calls and integrations
   - Track form submissions and file uploads

## Implementation Example

### Event Definition
```php
// Modules/Activity/Events/UserRegistered.php
namespace Modules\Activity\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class UserRegistered extends ShouldBeStored
{
    public array $userData;

    public function __construct(array $userData)
    {
        $this->userData = $userData;
    }
}
```

### Aggregate Definition
```php
// Modules/Activity/Aggregates/UserAggregate.php
namespace Modules\Activity\Aggregates;

use Modules\Activity\Events\UserRegistered;
use Modules\Activity\Events\UserUpdated;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class UserAggregate extends AggregateRoot
{
    public function register(array $userData): self
    {
        $this->recordThat(new UserRegistered($userData));
        
        return $this;
    }
    
    public function update(array $userData): self
    {
        $this->recordThat(new UserUpdated($userData));
        
        return $this;
    }
}
```

### Projector Implementation
```php
// Modules/Activity/Projectors/UserProjector.php
namespace Modules\Activity\Projectors;

use Modules\Activity\Events\UserRegistered;
use Modules\Activity\Events\UserUpdated;
use Modules\User\Models\User;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class UserProjector extends Projector
{
    public function onUserRegistered(UserRegistered $event, string $aggregateUuid)
    {
        User::create([
            'uuid' => $aggregateUuid,
            'data' => $event->userData,
        ]);
    }

    public function onUserUpdated(UserUpdated $event, string $aggregateUuid)
    {
        $user = User::where('uuid', $aggregateUuid)->first();
        $user->update(['data' => array_merge($user->data, $event->userData)]);
    }
}
```

### Usage in Controller
```php
// Modules/User/Http/Controllers/UserController.php
use Modules\Activity\Aggregates\UserAggregate;

public function store(Request $request)
{
    $userData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
    ]);

    UserAggregate::make()->register($userData)->persist();

    return redirect()->route('users.index');
}
```

## Best Practices for Multi-Module Applications
1. **Granular Events**: Define specific events for each action (e.g., `UserRegistered`, `AppointmentScheduled`) to ensure detailed tracking.
2. **Audit Compliance**: Store events indefinitely to meet regulatory requirements.
3. **Performance Optimization**: Use projectors to build efficient read models for frequent queries, avoiding real-time event replay in production.
4. **Security**: Encrypt sensitive event data within the event store.
5. **Reactors for Notifications**: Implement reactors for sending emails or SMS notifications on critical events like appointment confirmations.

## Resources
- [Spatie Laravel Event Sourcing](https://github.com/spatie/laravel-event-sourcing)
- [Spatie Documentation](https://docs.spatie.be/laravel-event-projector/v1/introduction)
- [Microsoft Azure Event Sourcing Pattern](https://docs.microsoft.com/en-us/azure/architecture/patterns/event-sourcing)
- [Larabank Examples](https://github.com/spatie/larabank-traditional)

This introduction to event sourcing sets the foundation for implementing a robust activity tracking system in your application, ensuring full traceability and compliance with industry standards.