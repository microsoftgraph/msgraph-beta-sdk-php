<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantSetupInfo extends Entity 
{
    /** @var PrivilegedRoleSettings|null $defaultRolesSettings  */
    private ?PrivilegedRoleSettings $defaultRolesSettings = null;
    
    /** @var bool|null $firstTimeSetup  */
    private ?bool $firstTimeSetup = null;
    
    /** @var array<string>|null $relevantRolesSettings  */
    private ?array $relevantRolesSettings = null;
    
    /** @var SetupStatus|null $setupStatus  */
    private ?SetupStatus $setupStatus = null;
    
    /** @var bool|null $skipSetup  */
    private ?bool $skipSetup = null;
    
    /** @var string|null $userRolesActions  */
    private ?string $userRolesActions = null;
    
    /**
     * Instantiates a new tenantSetupInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantSetupInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TenantSetupInfo {
        return new TenantSetupInfo();
    }

    /**
     * Gets the defaultRolesSettings property value. 
     * @return PrivilegedRoleSettings|null
    */
    public function getDefaultRolesSettings(): ?PrivilegedRoleSettings {
        return $this->defaultRolesSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'defaultRolesSettings' => function (self $o, ParseNode $n) { $o->setDefaultRolesSettings($n->getObjectValue(PrivilegedRoleSettings::class)); },
            'firstTimeSetup' => function (self $o, ParseNode $n) { $o->setFirstTimeSetup($n->getBooleanValue()); },
            'relevantRolesSettings' => function (self $o, ParseNode $n) { $o->setRelevantRolesSettings($n->getCollectionOfPrimitiveValues()); },
            'setupStatus' => function (self $o, ParseNode $n) { $o->setSetupStatus($n->getEnumValue(SetupStatus::class)); },
            'skipSetup' => function (self $o, ParseNode $n) { $o->setSkipSetup($n->getBooleanValue()); },
            'userRolesActions' => function (self $o, ParseNode $n) { $o->setUserRolesActions($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the firstTimeSetup property value. 
     * @return bool|null
    */
    public function getFirstTimeSetup(): ?bool {
        return $this->firstTimeSetup;
    }

    /**
     * Gets the relevantRolesSettings property value. 
     * @return array<string>|null
    */
    public function getRelevantRolesSettings(): ?array {
        return $this->relevantRolesSettings;
    }

    /**
     * Gets the setupStatus property value. 
     * @return SetupStatus|null
    */
    public function getSetupStatus(): ?SetupStatus {
        return $this->setupStatus;
    }

    /**
     * Gets the skipSetup property value. 
     * @return bool|null
    */
    public function getSkipSetup(): ?bool {
        return $this->skipSetup;
    }

    /**
     * Gets the userRolesActions property value. 
     * @return string|null
    */
    public function getUserRolesActions(): ?string {
        return $this->userRolesActions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('defaultRolesSettings', $this->defaultRolesSettings);
        $writer->writeBooleanValue('firstTimeSetup', $this->firstTimeSetup);
        $writer->writeCollectionOfPrimitiveValues('relevantRolesSettings', $this->relevantRolesSettings);
        $writer->writeEnumValue('setupStatus', $this->setupStatus);
        $writer->writeBooleanValue('skipSetup', $this->skipSetup);
        $writer->writeStringValue('userRolesActions', $this->userRolesActions);
    }

    /**
     * Sets the defaultRolesSettings property value. 
     *  @param PrivilegedRoleSettings|null $value Value to set for the defaultRolesSettings property.
    */
    public function setDefaultRolesSettings(?PrivilegedRoleSettings $value ): void {
        $this->defaultRolesSettings = $value;
    }

    /**
     * Sets the firstTimeSetup property value. 
     *  @param bool|null $value Value to set for the firstTimeSetup property.
    */
    public function setFirstTimeSetup(?bool $value ): void {
        $this->firstTimeSetup = $value;
    }

    /**
     * Sets the relevantRolesSettings property value. 
     *  @param array<string>|null $value Value to set for the relevantRolesSettings property.
    */
    public function setRelevantRolesSettings(?array $value ): void {
        $this->relevantRolesSettings = $value;
    }

    /**
     * Sets the setupStatus property value. 
     *  @param SetupStatus|null $value Value to set for the setupStatus property.
    */
    public function setSetupStatus(?SetupStatus $value ): void {
        $this->setupStatus = $value;
    }

    /**
     * Sets the skipSetup property value. 
     *  @param bool|null $value Value to set for the skipSetup property.
    */
    public function setSkipSetup(?bool $value ): void {
        $this->skipSetup = $value;
    }

    /**
     * Sets the userRolesActions property value. 
     *  @param string|null $value Value to set for the userRolesActions property.
    */
    public function setUserRolesActions(?string $value ): void {
        $this->userRolesActions = $value;
    }

}
