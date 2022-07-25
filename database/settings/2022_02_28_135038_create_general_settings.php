<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void {
        $this->migrator->add('general.websiteTitle', 'Flanwork');
        $this->migrator->add('general.websiteDescription', 'Powerful Laravel Client Installable Layer.');
        $this->migrator->add('general.logo', null);
        $this->migrator->add('general.favicon', null);

        $this->migrator->add('general.headerTags', '');
        $this->migrator->add('general.styles', []);
        $this->migrator->add('general.scripts', []);
        $this->migrator->add('general.customStyles', '');
        $this->migrator->add('general.gaId', '');
    }

    public function down(): void {
        $this->migrator->delete('general.websiteTitle');
        $this->migrator->delete('general.websiteDescription');
        $this->migrator->delete('general.logo');
        $this->migrator->delete('general.favicon');
        
        $this->migrator->delete('general.headerTags');
        $this->migrator->delete('general.styles');
        $this->migrator->delete('general.scripts');
        $this->migrator->delete('general.customStyles');
        $this->migrator->delete('general.gaId');
    }
}
