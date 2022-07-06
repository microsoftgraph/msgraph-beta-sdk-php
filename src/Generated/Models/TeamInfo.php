<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamInfo extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The name of the team.
    */
    private ?string $displayName = null;
    
    /**
     * @var Team|null $team The team property
    */
    private ?Team $team = null;
    
    /**
     * @var string|null $tenantId The ID of the Azure Active Directory tenant.
    */
    private ?string $tenantId = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new teamInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamInfo {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.associatedTeamInfo': return new AssociatedTeamInfo();
                case '#microsoft.graph.sharedWithChannelTeamInfo': return new SharedWithChannelTeamInfo();
            }
        }
        return new TeamInfo();
    }

    /**
     * Gets the displayName property value. The name of the team.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'team' => function (ParseNode $n) use ($o) { $o->setTeam($n->getObjectValue(array(Team::class, 'createFromDiscriminatorValue'))); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Gets the team property value. The team property
     * @return Team|null
    */
    public function getTeam(): ?Team {
        return $this->team;
    }

    /**
     * Gets the tenantId property value. The ID of the Azure Active Directory tenant.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('team', $this->team);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('@odata.type', $this->type);
    }

    /**
     * Sets the displayName property value. The name of the team.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the team property value. The team property
     *  @param Team|null $value Value to set for the team property.
    */
    public function setTeam(?Team $value ): void {
        $this->team = $value;
    }

    /**
     * Sets the tenantId property value. The ID of the Azure Active Directory tenant.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
