<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EncryptWithUserDefinedRights extends EncryptContent implements Parsable 
{
    /**
     * Instantiates a new encryptWithUserDefinedRights and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.encryptWithUserDefinedRights');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EncryptWithUserDefinedRights
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EncryptWithUserDefinedRights {
        return new EncryptWithUserDefinedRights();
    }

    /**
     * Gets the allowAdHocPermissions property value. The allowAdHocPermissions property
     * @return bool|null
    */
    public function getAllowAdHocPermissions(): ?bool {
        $val = $this->getBackingStore()->get('allowAdHocPermissions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAdHocPermissions'");
    }

    /**
     * Gets the allowMailForwarding property value. The allowMailForwarding property
     * @return bool|null
    */
    public function getAllowMailForwarding(): ?bool {
        $val = $this->getBackingStore()->get('allowMailForwarding');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowMailForwarding'");
    }

    /**
     * Gets the decryptionRightsManagementTemplateId property value. The decryptionRightsManagementTemplateId property
     * @return string|null
    */
    public function getDecryptionRightsManagementTemplateId(): ?string {
        $val = $this->getBackingStore()->get('decryptionRightsManagementTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decryptionRightsManagementTemplateId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAdHocPermissions' => fn(ParseNode $n) => $o->setAllowAdHocPermissions($n->getBooleanValue()),
            'allowMailForwarding' => fn(ParseNode $n) => $o->setAllowMailForwarding($n->getBooleanValue()),
            'decryptionRightsManagementTemplateId' => fn(ParseNode $n) => $o->setDecryptionRightsManagementTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAdHocPermissions', $this->getAllowAdHocPermissions());
        $writer->writeBooleanValue('allowMailForwarding', $this->getAllowMailForwarding());
        $writer->writeStringValue('decryptionRightsManagementTemplateId', $this->getDecryptionRightsManagementTemplateId());
    }

    /**
     * Sets the allowAdHocPermissions property value. The allowAdHocPermissions property
     * @param bool|null $value Value to set for the allowAdHocPermissions property.
    */
    public function setAllowAdHocPermissions(?bool $value): void {
        $this->getBackingStore()->set('allowAdHocPermissions', $value);
    }

    /**
     * Sets the allowMailForwarding property value. The allowMailForwarding property
     * @param bool|null $value Value to set for the allowMailForwarding property.
    */
    public function setAllowMailForwarding(?bool $value): void {
        $this->getBackingStore()->set('allowMailForwarding', $value);
    }

    /**
     * Sets the decryptionRightsManagementTemplateId property value. The decryptionRightsManagementTemplateId property
     * @param string|null $value Value to set for the decryptionRightsManagementTemplateId property.
    */
    public function setDecryptionRightsManagementTemplateId(?string $value): void {
        $this->getBackingStore()->set('decryptionRightsManagementTemplateId', $value);
    }

}
