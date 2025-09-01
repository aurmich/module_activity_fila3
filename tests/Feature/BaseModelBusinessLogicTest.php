<?php

declare(strict_types=1);

namespace Modules\Activity\Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Str;
use Modules\Activity\Models\BaseModel;
use Tests\TestCase;

class BaseModelBusinessLogicTest extends TestCase
{

=======
use Modules\Activity\Models\BaseModel;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BaseModelBusinessLogicTest extends TestCase
{
    use RefreshDatabase;
>>>>>>> f371b59 (.)

    /** @test */
    public function it_can_create_base_model_instance(): void
    {
        // Creiamo una classe concreta che estende BaseModel per i test
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';

=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
            
>>>>>>> f371b59 (.)
            /** @var list<string> */
            protected $fillable = ['name', 'value'];
        };

<<<<<<< HEAD
        expect(BaseModel::class, $concreteModel);
        expect(\Illuminate\Database\Eloquent\Model::class, $concreteModel);
=======
        $this->assertInstanceOf(BaseModel::class, $concreteModel);
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Model::class, $concreteModel);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_has_correct_connection_setting(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect('activity', $concreteModel->getConnectionName());
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertEquals('activity', $concreteModel->getConnectionName());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_has_correct_primary_key_setting(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect('id', $concreteModel->getKeyName());
        expect('string', $concreteModel->getKeyType());
        expect($concreteModel->getIncrementing());
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertEquals('id', $concreteModel->getKeyName());
        $this->assertEquals('string', $concreteModel->getKeyType());
        $this->assertTrue($concreteModel->getIncrementing());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_has_correct_timestamps_setting(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect($concreteModel->usesTimestamps());
        expect($concreteModel->timestamps);
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertTrue($concreteModel->usesTimestamps());
        $this->assertTrue($concreteModel->timestamps);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_has_correct_per_page_setting(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect(30, $concreteModel->getPerPage());
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertEquals(30, $concreteModel->getPerPage());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_has_correct_snake_attributes_setting(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect($concreteModel::$snakeAttributes);
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertTrue($concreteModel::$snakeAttributes);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_has_correct_casts_configuration(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
=======
        $concreteModel = new class extends BaseModel {
>>>>>>> f371b59 (.)
            protected $table = 'test_models';
        };

        $casts = $concreteModel->getCasts();
<<<<<<< HEAD

        $this->assertArrayHasKey('id', $casts);
        expect('string', $casts['id']);

        $this->assertArrayHasKey('uuid', $casts);
        expect('string', $casts['uuid']);

        $this->assertArrayHasKey('created_at', $casts);
        expect('datetime', $casts['created_at']);

        $this->assertArrayHasKey('updated_at', $casts);
        expect('datetime', $casts['updated_at']);

        $this->assertArrayHasKey('deleted_at', $casts);
        expect('datetime', $casts['deleted_at']);

        $this->assertArrayHasKey('updated_by', $casts);
        expect('string', $casts['updated_by']);

        $this->assertArrayHasKey('created_by', $casts);
        expect('string', $casts['created_by']);

        $this->assertArrayHasKey('deleted_by', $casts);
        expect('string', $casts['deleted_by']);

        $this->assertArrayHasKey('published_at', $casts);
        expect('datetime', $casts['published_at']);
=======
        
        $this->assertArrayHasKey('id', $casts);
        $this->assertEquals('string', $casts['id']);
        
        $this->assertArrayHasKey('uuid', $casts);
        $this->assertEquals('string', $casts['uuid']);
        
        $this->assertArrayHasKey('created_at', $casts);
        $this->assertEquals('datetime', $casts['created_at']);
        
        $this->assertArrayHasKey('updated_at', $casts);
        $this->assertEquals('datetime', $casts['updated_at']);
        
        $this->assertArrayHasKey('deleted_at', $casts);
        $this->assertEquals('datetime', $casts['deleted_at']);
        
        $this->assertArrayHasKey('updated_by', $casts);
        $this->assertEquals('string', $casts['updated_by']);
        
        $this->assertArrayHasKey('created_by', $casts);
        $this->assertEquals('string', $casts['created_by']);
        
        $this->assertArrayHasKey('deleted_by', $casts);
        $this->assertEquals('string', $casts['deleted_by']);
        
        $this->assertArrayHasKey('published_at', $casts);
        $this->assertEquals('datetime', $casts['published_at']);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_use_factory(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';

=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
            
>>>>>>> f371b59 (.)
            /** @var list<string> */
            protected $fillable = ['name', 'value'];
        };

<<<<<<< HEAD
        expect(method_exists($concreteModel, 'factory'));
        expect(method_exists($concreteModel, 'newFactory'));
=======
        $this->assertTrue(method_exists($concreteModel, 'factory'));
        $this->assertTrue(method_exists($concreteModel, 'newFactory'));
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_has_updater_trait(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
=======
        $concreteModel = new class extends BaseModel {
>>>>>>> f371b59 (.)
            protected $table = 'test_models';
        };

        $traits = class_uses($concreteModel);
        $this->assertContains(\Modules\Xot\Traits\Updater::class, $traits);
    }

    /** @test */
    public function it_has_has_factory_trait(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
=======
        $concreteModel = new class extends BaseModel {
>>>>>>> f371b59 (.)
            protected $table = 'test_models';
        };

        $traits = class_uses($concreteModel);
        $this->assertContains(\Illuminate\Database\Eloquent\Factories\HasFactory::class, $traits);
    }

    /** @test */
    public function it_can_handle_uuid_generation(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';

=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
            
>>>>>>> f371b59 (.)
            /** @var list<string> */
            protected $fillable = ['uuid', 'name'];
        };

        $uuid = Str::uuid()->toString();
        $concreteModel->uuid = $uuid;
        $concreteModel->name = 'Test Model';

<<<<<<< HEAD
        expect($uuid, $concreteModel->uuid);
        expect('Test Model', $concreteModel->name);
=======
        $this->assertEquals($uuid, $concreteModel->uuid);
        $this->assertEquals('Test Model', $concreteModel->name);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_handle_timestamps(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';

=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
            
>>>>>>> f371b59 (.)
            /** @var list<string> */
            protected $fillable = ['name'];
        };

        $now = now();
        $concreteModel->created_at = $now;
        $concreteModel->updated_at = $now;

<<<<<<< HEAD
        expect($now->timestamp, $concreteModel->created_at->timestamp);
        expect($now->timestamp, $concreteModel->updated_at->timestamp);
=======
        $this->assertEquals($now->timestamp, $concreteModel->created_at->timestamp);
        $this->assertEquals($now->timestamp, $concreteModel->updated_at->timestamp);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_handle_soft_deletes(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';

=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
            
>>>>>>> f371b59 (.)
            /** @var list<string> */
            protected $fillable = ['name'];
        };

        $now = now();
        $concreteModel->deleted_at = $now;

<<<<<<< HEAD
        expect($now->timestamp, $concreteModel->deleted_at->timestamp);
=======
        $this->assertEquals($now->timestamp, $concreteModel->deleted_at->timestamp);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_handle_published_at_timestamp(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';

=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
            
>>>>>>> f371b59 (.)
            /** @var list<string> */
            protected $fillable = ['name'];
        };

        $now = now();
        $concreteModel->published_at = $now;

<<<<<<< HEAD
        expect($now->timestamp, $concreteModel->published_at->timestamp);
=======
        $this->assertEquals($now->timestamp, $concreteModel->published_at->timestamp);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_handle_user_tracking_fields(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';

=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
            
>>>>>>> f371b59 (.)
            /** @var list<string> */
            protected $fillable = ['name'];
        };

        $concreteModel->created_by = 'user-123';
        $concreteModel->updated_by = 'user-456';
        $concreteModel->deleted_by = 'user-789';

<<<<<<< HEAD
        expect('user-123', $concreteModel->created_by);
        expect('user-456', $concreteModel->updated_by);
        expect('user-789', $concreteModel->deleted_by);
=======
        $this->assertEquals('user-123', $concreteModel->created_by);
        $this->assertEquals('user-456', $concreteModel->updated_by);
        $this->assertEquals('user-789', $concreteModel->deleted_by);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_has_correct_hidden_attributes(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
=======
        $concreteModel = new class extends BaseModel {
>>>>>>> f371b59 (.)
            protected $table = 'test_models';
        };

        $hidden = $concreteModel->getHidden();
<<<<<<< HEAD

=======
        
>>>>>>> f371b59 (.)
        // Verifica che gli attributi nascosti siano configurati correttamente
        $this->assertIsArray($hidden);
        // Nota: il BaseModel ha un array vuoto per $hidden, quindi non dovrebbe contenere 'password'
        $this->assertNotContains('password', $hidden);
    }

    /** @test */
    public function it_can_use_connection_methods(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect('activity', $concreteModel->getConnectionName());
        expect(\Illuminate\Database\ConnectionInterface::class, $concreteModel->getConnection());
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertEquals('activity', $concreteModel->getConnectionName());
        $this->assertInstanceOf(\Illuminate\Database\ConnectionInterface::class, $concreteModel->getConnection());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_use_table_methods(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect('test_models', $concreteModel->getTable());
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertEquals('test_models', $concreteModel->getTable());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_use_key_methods(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect('id', $concreteModel->getKeyName());
        expect('string', $concreteModel->getKeyType());
        expect($concreteModel->getIncrementing());
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertEquals('id', $concreteModel->getKeyName());
        $this->assertEquals('string', $concreteModel->getKeyType());
        $this->assertTrue($concreteModel->getIncrementing());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_use_timestamp_methods(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect($concreteModel->usesTimestamps());
        expect($concreteModel->timestamps);

        expect('created_at', $concreteModel->getCreatedAtColumn());
        expect('updated_at', $concreteModel->getUpdatedAtColumn());
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertTrue($concreteModel->usesTimestamps());
        $this->assertTrue($concreteModel->timestamps);
        
        $this->assertEquals('created_at', $concreteModel->getCreatedAtColumn());
        $this->assertEquals('updated_at', $concreteModel->getUpdatedAtColumn());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_use_per_page_methods(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect(30, $concreteModel->getPerPage());

        // Test setPerPage
        $concreteModel->setPerPage(50);
        expect(50, $concreteModel->getPerPage());
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertEquals(30, $concreteModel->getPerPage());
        
        // Test setPerPage
        $concreteModel->setPerPage(50);
        $this->assertEquals(50, $concreteModel->getPerPage());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_use_snake_attributes_methods(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';
        };

        expect($concreteModel::$snakeAttributes);

        // Test setSnakeAttributes
        $concreteModel::$snakeAttributes = false;
        expect($concreteModel::$snakeAttributes);

        // Ripristina il valore originale
        $concreteModel::$snakeAttributes = true;
        expect($concreteModel::$snakeAttributes);
=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
        };

        $this->assertTrue($concreteModel::$snakeAttributes);
        
        // Test setSnakeAttributes
        $concreteModel::$snakeAttributes = false;
        $this->assertFalse($concreteModel::$snakeAttributes);
        
        // Ripristina il valore originale
        $concreteModel::$snakeAttributes = true;
        $this->assertTrue($concreteModel::$snakeAttributes);
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_use_casts_methods(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
=======
        $concreteModel = new class extends BaseModel {
>>>>>>> f371b59 (.)
            protected $table = 'test_models';
        };

        $casts = $concreteModel->getCasts();
        $this->assertIsArray($casts);
        $this->assertArrayHasKey('id', $casts);
        $this->assertArrayHasKey('created_at', $casts);
        $this->assertArrayHasKey('updated_at', $casts);
<<<<<<< HEAD

        // Test setCasts
        $newCasts = ['test_field' => 'string'];
        $concreteModel->setCasts($newCasts);
        expect($newCasts, $concreteModel->getCasts());
=======
        
        // Test setCasts
        $newCasts = ['test_field' => 'string'];
        $concreteModel->setCasts($newCasts);
        $this->assertEquals($newCasts, $concreteModel->getCasts());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_use_fillable_methods(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';

=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
            
>>>>>>> f371b59 (.)
            /** @var list<string> */
            protected $fillable = ['name', 'value'];
        };

        $fillable = $concreteModel->getFillable();
        $this->assertIsArray($fillable);
        $this->assertContains('name', $fillable);
        $this->assertContains('value', $fillable);
<<<<<<< HEAD

        // Test setFillable
        $newFillable = ['new_field'];
        $concreteModel->setFillable($newFillable);
        expect($newFillable, $concreteModel->getFillable());
=======
        
        // Test setFillable
        $newFillable = ['new_field'];
        $concreteModel->setFillable($newFillable);
        $this->assertEquals($newFillable, $concreteModel->getFillable());
>>>>>>> f371b59 (.)
    }

    /** @test */
    public function it_can_use_hidden_methods(): void
    {
<<<<<<< HEAD
        $concreteModel = new class extends BaseModel
        {
            protected $table = 'test_models';

=======
        $concreteModel = new class extends BaseModel {
            protected $table = 'test_models';
            
>>>>>>> f371b59 (.)
            /** @var list<string> */
            protected $hidden = ['secret_field'];
        };

        $hidden = $concreteModel->getHidden();
        $this->assertIsArray($hidden);
        $this->assertContains('secret_field', $hidden);
<<<<<<< HEAD

        // Test setHidden
        $newHidden = ['new_secret'];
        $concreteModel->setHidden($newHidden);
        expect($newHidden, $concreteModel->getHidden());
=======
        
        // Test setHidden
        $newHidden = ['new_secret'];
        $concreteModel->setHidden($newHidden);
        $this->assertEquals($newHidden, $concreteModel->getHidden());
>>>>>>> f371b59 (.)
    }
}
