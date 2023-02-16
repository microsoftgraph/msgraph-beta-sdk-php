<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Teamwork extends Entity implements Parsable 
{
    /**
     * Instantiates a new Teamwork and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Teamwork
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Teamwork {
        return new Teamwork();
    }

    /**
     * Gets the deletedTeams property value. A collection of deleted teams.
     * @return array<DeletedTeam>|null
    */
    public function getDeletedTeams(): ?array {
        return $this->getBackingStore()->get('deletedTeams');
    }

    /**
     * Gets the devices property value. The Teams devices provisioned for the tenant.
     * @return array<TeamworkDevice>|null
    */
    public function getDevices(): ?array {
        return $this->getBackingStore()->get('devices');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deletedTeams' => fn(ParseNode $n) => $o->setDeletedTeams($n->getCollectionOfObjectValues([DeletedTeam::class, 'createFromDiscriminatorValue'])),
            'devices' => fn(ParseNode $n) => $o->setDevices($n->getCollectionOfObjectValues([TeamworkDevice::class, 'createFromDiscriminatorValue'])),
            'teamsAppSettings' => fn(ParseNode $n) => $o->setTeamsAppSettings($n->getObjectValue([TeamsAppSettings::class, 'createFromDiscriminatorValue'])),
            'teamTemplates' => fn(ParseNode $n) => $o->setTeamTemplates($n->getCollectionOfObjectValues([TeamTemplate::class, 'createFromDiscriminatorValue'])),
            'workforceIntegrations' => fn(ParseNode $n) => $o->setWorkforceIntegrations($n->getCollectionOfObjectValues([WorkforceIntegration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the teamsAppSettings property value. Represents tenant-wide settings for all Teams apps in the tenant.
     * @return TeamsAppSettings|null
    */
    public function getTeamsAppSettings(): ?TeamsAppSettings {
        return $this->getBackingStore()->get('teamsAppSettings');
    }

    /**
     * Gets the teamTemplates property value. The templates associated with a team.
     * @return array<TeamTemplate>|null
    */
    public function getTeamTemplates(): ?array {
        return $this->getBackingStore()->get('teamTemplates');
    }

    /**
     * Gets the workforceIntegrations property value. A workforce integration with shifts.
     * @return array<WorkforceIntegration>|null
    */
    public function getWorkforceIntegrations(): ?array {
        return $this->getBackingStore()->get('workforceIntegrations');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('deletedTeams', $this->getDeletedTeams());
        $writer->writeCollectionOfObjectValues('devices', $this->getDevices());
        $writer->writeObjectValue('teamsAppSettings', $this->getTeamsAppSettings());
        $writer->writeCollectionOfObjectValues('teamTemplates', $this->getTeamTemplates());
        $writer->writeCollectionOfObjectValues('workforceIntegrations', $this->getWorkforceIntegrations());
    }

    /**
     * Sets the deletedTeams property value. A collection of deleted teams.
     * @param array<DeletedTeam>|null $value Value to set for the deletedTeams property.
    */
    public function setDeletedTeams(?array $value): void {
        $this->getBackingStore()->set('deletedTeams', $value);
    }

    /**
     * Sets the devices property value. The Teams devices provisioned for the tenant.
     * @param array<TeamworkDevice>|null $value Value to set for the devices property.
    */
    public function setDevices(?array $value): void {
        $this->getBackingStore()->set('devices', $value);
    }

    /**
     * Sets the teamsAppSettings property value. Represents tenant-wide settings for all Teams apps in the tenant.
     * @param TeamsAppSettings|null $value Value to set for the teamsAppSettings property.
    */
    public function setTeamsAppSettings(?TeamsAppSettings $value): void {
        $this->getBackingStore()->set('teamsAppSettings', $value);
    }

    /**
     * Sets the teamTemplates property value. The templates associated with a team.
     * @param array<TeamTemplate>|null $value Value to set for the teamTemplates property.
    */
    public function setTeamTemplates(?array $value): void {
        $this->getBackingStore()->set('teamTemplates', $value);
    }

    /**
     * Sets the workforceIntegrations property value. A workforce integration with shifts.
     * @param array<WorkforceIntegration>|null $value Value to set for the workforceIntegrations property.
    */
    public function setWorkforceIntegrations(?array $value): void {
        $this->getBackingStore()->set('workforceIntegrations', $value);
    }

}
