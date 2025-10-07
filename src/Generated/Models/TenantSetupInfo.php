<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TenantSetupInfo extends Entity implements Parsable 
{
    /**
     * Instantiates a new TenantSetupInfo and sets the default values.
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
        $val = $this->getBackingStore()->get('defaultRolesSettings');
        if (is_null($val) || $val instanceof PrivilegedRoleSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultRolesSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultRolesSettings' => fn(ParseNode $n) => $o->setDefaultRolesSettings($n->getObjectValue([PrivilegedRoleSettings::class, 'createFromDiscriminatorValue'])),
            'firstTimeSetup' => fn(ParseNode $n) => $o->setFirstTimeSetup($n->getBooleanValue()),
            'relevantRolesSettings' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRelevantRolesSettings($val);
            },
            'setupStatus' => fn(ParseNode $n) => $o->setSetupStatus($n->getEnumValue(SetupStatus::class)),
            'skipSetup' => fn(ParseNode $n) => $o->setSkipSetup($n->getBooleanValue()),
            'userRolesActions' => fn(ParseNode $n) => $o->setUserRolesActions($n->getStringValue()),
        ]);
    }

    /**
     * Gets the firstTimeSetup property value. The firstTimeSetup property
     * @return bool|null
    */
    public function getFirstTimeSetup(): ?bool {
        $val = $this->getBackingStore()->get('firstTimeSetup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstTimeSetup'");
    }

    /**
     * Gets the relevantRolesSettings property value. The relevantRolesSettings property
     * @return array<string>|null
    */
    public function getRelevantRolesSettings(): ?array {
        $val = $this->getBackingStore()->get('relevantRolesSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relevantRolesSettings'");
    }

    /**
     * Gets the setupStatus property value. The setupStatus property
     * @return SetupStatus|null
    */
    public function getSetupStatus(): ?SetupStatus {
        $val = $this->getBackingStore()->get('setupStatus');
        if (is_null($val) || $val instanceof SetupStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setupStatus'");
    }

    /**
     * Gets the skipSetup property value. The skipSetup property
     * @return bool|null
    */
    public function getSkipSetup(): ?bool {
        $val = $this->getBackingStore()->get('skipSetup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skipSetup'");
    }

    /**
     * Gets the userRolesActions property value. The userRolesActions property
     * @return string|null
    */
    public function getUserRolesActions(): ?string {
        $val = $this->getBackingStore()->get('userRolesActions');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRolesActions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('defaultRolesSettings', $this->getDefaultRolesSettings());
        $writer->writeBooleanValue('firstTimeSetup', $this->getFirstTimeSetup());
        $writer->writeCollectionOfPrimitiveValues('relevantRolesSettings', $this->getRelevantRolesSettings());
        $writer->writeEnumValue('setupStatus', $this->getSetupStatus());
        $writer->writeBooleanValue('skipSetup', $this->getSkipSetup());
        $writer->writeStringValue('userRolesActions', $this->getUserRolesActions());
    }

    /**
     * Sets the defaultRolesSettings property value. The defaultRolesSettings property
     * @param PrivilegedRoleSettings|null $value Value to set for the defaultRolesSettings property.
    */
    public function setDefaultRolesSettings(?PrivilegedRoleSettings $value): void {
        $this->getBackingStore()->set('defaultRolesSettings', $value);
    }

    /**
     * Sets the firstTimeSetup property value. The firstTimeSetup property
     * @param bool|null $value Value to set for the firstTimeSetup property.
    */
    public function setFirstTimeSetup(?bool $value): void {
        $this->getBackingStore()->set('firstTimeSetup', $value);
    }

    /**
     * Sets the relevantRolesSettings property value. The relevantRolesSettings property
     * @param array<string>|null $value Value to set for the relevantRolesSettings property.
    */
    public function setRelevantRolesSettings(?array $value): void {
        $this->getBackingStore()->set('relevantRolesSettings', $value);
    }

    /**
     * Sets the setupStatus property value. The setupStatus property
     * @param SetupStatus|null $value Value to set for the setupStatus property.
    */
    public function setSetupStatus(?SetupStatus $value): void {
        $this->getBackingStore()->set('setupStatus', $value);
    }

    /**
     * Sets the skipSetup property value. The skipSetup property
     * @param bool|null $value Value to set for the skipSetup property.
    */
    public function setSkipSetup(?bool $value): void {
        $this->getBackingStore()->set('skipSetup', $value);
    }

    /**
     * Sets the userRolesActions property value. The userRolesActions property
     * @param string|null $value Value to set for the userRolesActions property.
    */
    public function setUserRolesActions(?string $value): void {
        $this->getBackingStore()->set('userRolesActions', $value);
    }

}
