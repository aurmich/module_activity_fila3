<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 478e0e4 (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Illuminate\Support\Str;

<<<<<<< HEAD
// ---------CSS------------

/**
 * Class SmsService.
 */
class MailService
{
    private static ?self $instance = null;

    public ?string $from;
    public string $to;

    public string $driver = 'duocircle';
    public ?string $body;

    public array $vars = [];

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public static function make(): self
    {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self
    {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function mergeVars(array $vars): self
    {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    /**
     * ---.
     */
    public function send(): self
    {
        $class = '\Modules\Notify\Services\MailEngines\\' . Str::studly($this->driver) . 'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->send();

        return $this;
    }

    /**
     * ---.
     */
    public function try(): self
    {
        $class = '\Modules\Notify\Services\MailEngines\\' . Str::studly($this->driver) . 'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->try();

        return $this;
    }
}
=======
=======
>>>>>>> 3a0e0a5 (up)
=======
>>>>>>> 8be0eaa (up)
<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Illuminate\Support\Str;

// ---------CSS------------

/**
 * Class SmsService.
 */
class MailService {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;

    public string $driver = 'duocircle';
    public ?string $body;

    public array $vars = [];

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function make(): self {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function mergeVars(array $vars): self {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    /**
     * ---.
     */
    public function send(): self {
        $class = '\Modules\Notify\Services\MailEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->send();

        return $this;
    }

    /**
     * ---.
     */
    public function try(): self {
        $class = '\Modules\Notify\Services\MailEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->try();

        return $this;
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9349baf (.)
=======
>>>>>>> 3a0e0a5 (up)
=======
<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Illuminate\Support\Str;

// ---------CSS------------
=======
//---------CSS------------
>>>>>>> 478e0e4 (.)

/**
 * Class SmsService.
 */
class MailService {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;

    public string $driver = 'duocircle';
    public ?string $body;

    public array $vars = [];

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function make(): self {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    public function mergeVars(array $vars): self {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    /**
     * ---.
     */
    public function send() {
        $class = '\Modules\Notify\Services\MailEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->send();
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6d517f2 (.)

    /**
     * ---.
     */
    public function try() {
        $class = '\Modules\Notify\Services\MailEngines\\'.Str::studly($this->driver).'Engine';
        $class::make()
            ->setLocalVars($this->vars)
            ->try();
    }
}
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 8be0eaa (up)
=======
}
>>>>>>> 478e0e4 (.)
