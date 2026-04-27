<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Colegio = 'colegio';
    case Escuela = 'escuela';
    case Kawsay = 'kawsay';
    case Radio = 'radio';
    case SipasWayna = 'sipas_wayna';

    public function label(): string
    {
        return match ($this) {
            self::Admin => 'Administrador',
            self::Colegio => 'Colegio',
            self::Escuela => 'Escuela superior',
            self::Kawsay => 'Kawsay',
            self::Radio => 'Radio',
            self::SipasWayna => 'Sipas Wayna',
        };
    }

    /** @return list<string> */
    public static function values(): array
    {
        return array_map(fn (self $r) => $r->value, self::cases());
    }
}
