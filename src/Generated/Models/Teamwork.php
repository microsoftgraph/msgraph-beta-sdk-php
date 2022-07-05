<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Teamwork extends Entity implements Parsable 
{
    /**
     * @var array<DeletedTeam>|null $deletedTeams A collection of deleted teams.
    */
    private ?array $deletedTeams = null;
    
    /**
     * @var array<TeamworkDevice>|null $devices The Teams devices provisioned for the tenant.
    */
    private ?array $devices = null;
    
    /**
     * @var TeamsAppSettings|null $teamsAppSettings The teamsAppSettings property
    */
    private ?TeamsAppSettings $teamsAppSettings = null;
    
    /**
     * @var array<WorkforceIntegration>|null $workforceIntegrations A workforce integration with shifts.
    */
    private ?array $workforceIntegrations = null;
    
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
        return $this->deletedTeams;
    }

    /**
     * Gets the devices property value. The Teams devices provisioned for the tenant.
     * @return array<TeamworkDevice>|null
    */
    public function getDevices(): ?array {
        return $this->devices;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deletedTeams' => function (ParseNode $n) use ($o) { $o->setDeletedTeams($n->getCollectionOfObjectValues(array(DeletedTeam::class, 'createFromDiscriminatorValue'))); },
            'devices' => function (ParseNode $n) use ($o) { $o->setDevices($n->getCollectionOfObjectValues(array(TeamworkDevice::class, 'createFromDiscriminatorValue'))); },
            'teamsAppSettings' => function (ParseNode $n) use ($o) { $o->setTeamsAppSettings($n->getObjectValue(array(TeamsAppSettings::class, 'createFromDiscriminatorValue'))); },
            'workforceIntegrations' => function (ParseNode $n) use ($o) { $o->setWorkforceIntegrations($n->getCollectionOfObjectValues(array(WorkforceIntegration::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the teamsAppSettings property value. The teamsAppSettings property
     * @return TeamsAppSettings|null
    */
    public function getTeamsAppSettings(): ?TeamsAppSettings {
        return $this->teamsAppSettings;
    }

    /**
     * Gets the workforceIntegrations property value. A workforce integration with shifts.
     * @return array<WorkforceIntegration>|null
    */
    public function getWorkforceIntegrations(): ?array {
        return $this->workforceIntegrations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('deletedTeams', $this->deletedTeams);
        $writer->writeCollectionOfObjectValues('devices', $this->devices);
        $writer->writeObjectValue('teamsAppSettings', $this->teamsAppSettings);
        $writer->writeCollectionOfObjectValues('workforceIntegrations', $this->workforceIntegrations);
    }

    /**
     * Sets the deletedTeams property value. A collection of deleted teams.
     *  @param array<DeletedTeam>|null $value Value to set for the deletedTeams property.
    */
    public function setDeletedTeams(?array $value ): void {
        $this->deletedTeams = $value;
    }

    /**
     * Sets the devices property value. The Teams devices provisioned for the tenant.
     *  @param array<TeamworkDevice>|null $value Value to set for the devices property.
    */
    public function setDevices(?array $value ): void {
        $this->devices = $value;
    }

    /**
     * Sets the teamsAppSettings property value. The teamsAppSettings property
     *  @param TeamsAppSettings|null $value Value to set for the teamsAppSettings property.
    */
    public function setTeamsAppSettings(?TeamsAppSettings $value ): void {
        $this->teamsAppSettings = $value;
    }

    /**
     * Sets the workforceIntegrations property value. A workforce integration with shifts.
     *  @param array<WorkforceIntegration>|null $value Value to set for the workforceIntegrations property.
    */
    public function setWorkforceIntegrations(?array $value ): void {
        $this->workforceIntegrations = $value;
    }

}
