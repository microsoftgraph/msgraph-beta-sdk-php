<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantSetupInfo extends Entity implements Parsable 
{
    /**
     * @var PrivilegedRoleSettings|null $defaultRolesSettings The defaultRolesSettings property
    */
    private ?PrivilegedRoleSettings $defaultRolesSettings = null;
    
    /**
     * @var bool|null $firstTimeSetup The firstTimeSetup property
    */
    private ?bool $firstTimeSetup = null;
    
    /**
     * @var array<string>|null $relevantRolesSettings The relevantRolesSettings property
    */
    private ?array $relevantRolesSettings = null;
    
    /**
     * @var SetupStatus|null $setupStatus The setupStatus property
    */
    private ?SetupStatus $setupStatus = null;
    
    /**
     * @var bool|null $skipSetup The skipSetup property
    */
    private ?bool $skipSetup = null;
    
    /**
     * @var string|null $userRolesActions The userRolesActions property
    */
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantSetupInfo {
        return new TenantSetupInfo();
    }

    /**
     * Gets the defaultRolesSettings property value. The defaultRolesSettings property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultRolesSettings' => function (ParseNode $n) use ($o) { $o->setDefaultRolesSettings($n->getObjectValue(array(PrivilegedRoleSettings::class, 'createFromDiscriminatorValue'))); },
            'firstTimeSetup' => function (ParseNode $n) use ($o) { $o->setFirstTimeSetup($n->getBooleanValue()); },
            'relevantRolesSettings' => function (ParseNode $n) use ($o) { $o->setRelevantRolesSettings($n->getCollectionOfPrimitiveValues()); },
            'setupStatus' => function (ParseNode $n) use ($o) { $o->setSetupStatus($n->getEnumValue(SetupStatus::class)); },
            'skipSetup' => function (ParseNode $n) use ($o) { $o->setSkipSetup($n->getBooleanValue()); },
            'userRolesActions' => function (ParseNode $n) use ($o) { $o->setUserRolesActions($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the firstTimeSetup property value. The firstTimeSetup property
     * @return bool|null
    */
    public function getFirstTimeSetup(): ?bool {
        return $this->firstTimeSetup;
    }

    /**
     * Gets the relevantRolesSettings property value. The relevantRolesSettings property
     * @return array<string>|null
    */
    public function getRelevantRolesSettings(): ?array {
        return $this->relevantRolesSettings;
    }

    /**
     * Gets the setupStatus property value. The setupStatus property
     * @return SetupStatus|null
    */
    public function getSetupStatus(): ?SetupStatus {
        return $this->setupStatus;
    }

    /**
     * Gets the skipSetup property value. The skipSetup property
     * @return bool|null
    */
    public function getSkipSetup(): ?bool {
        return $this->skipSetup;
    }

    /**
     * Gets the userRolesActions property value. The userRolesActions property
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
     * Sets the defaultRolesSettings property value. The defaultRolesSettings property
     *  @param PrivilegedRoleSettings|null $value Value to set for the defaultRolesSettings property.
    */
    public function setDefaultRolesSettings(?PrivilegedRoleSettings $value ): void {
        $this->defaultRolesSettings = $value;
    }

    /**
     * Sets the firstTimeSetup property value. The firstTimeSetup property
     *  @param bool|null $value Value to set for the firstTimeSetup property.
    */
    public function setFirstTimeSetup(?bool $value ): void {
        $this->firstTimeSetup = $value;
    }

    /**
     * Sets the relevantRolesSettings property value. The relevantRolesSettings property
     *  @param array<string>|null $value Value to set for the relevantRolesSettings property.
    */
    public function setRelevantRolesSettings(?array $value ): void {
        $this->relevantRolesSettings = $value;
    }

    /**
     * Sets the setupStatus property value. The setupStatus property
     *  @param SetupStatus|null $value Value to set for the setupStatus property.
    */
    public function setSetupStatus(?SetupStatus $value ): void {
        $this->setupStatus = $value;
    }

    /**
     * Sets the skipSetup property value. The skipSetup property
     *  @param bool|null $value Value to set for the skipSetup property.
    */
    public function setSkipSetup(?bool $value ): void {
        $this->skipSetup = $value;
    }

    /**
     * Sets the userRolesActions property value. The userRolesActions property
     *  @param string|null $value Value to set for the userRolesActions property.
    */
    public function setUserRolesActions(?string $value ): void {
        $this->userRolesActions = $value;
    }

}
