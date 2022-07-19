<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EncryptWithUserDefinedRights extends EncryptContent implements Parsable 
{
    /**
     * @var bool|null $allowAdHocPermissions The allowAdHocPermissions property
    */
    private ?bool $allowAdHocPermissions = null;
    
    /**
     * @var bool|null $allowMailForwarding The allowMailForwarding property
    */
    private ?bool $allowMailForwarding = null;
    
    /**
     * @var string|null $decryptionRightsManagementTemplateId The decryptionRightsManagementTemplateId property
    */
    private ?string $decryptionRightsManagementTemplateId = null;
    
    /**
     * Instantiates a new EncryptWithUserDefinedRights and sets the default values.
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
        return $this->allowAdHocPermissions;
    }

    /**
     * Gets the allowMailForwarding property value. The allowMailForwarding property
     * @return bool|null
    */
    public function getAllowMailForwarding(): ?bool {
        return $this->allowMailForwarding;
    }

    /**
     * Gets the decryptionRightsManagementTemplateId property value. The decryptionRightsManagementTemplateId property
     * @return string|null
    */
    public function getDecryptionRightsManagementTemplateId(): ?string {
        return $this->decryptionRightsManagementTemplateId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAdHocPermissions' => function (ParseNode $n) use ($o) { $o->setAllowAdHocPermissions($n->getBooleanValue()); },
            'allowMailForwarding' => function (ParseNode $n) use ($o) { $o->setAllowMailForwarding($n->getBooleanValue()); },
            'decryptionRightsManagementTemplateId' => function (ParseNode $n) use ($o) { $o->setDecryptionRightsManagementTemplateId($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAdHocPermissions', $this->allowAdHocPermissions);
        $writer->writeBooleanValue('allowMailForwarding', $this->allowMailForwarding);
        $writer->writeStringValue('decryptionRightsManagementTemplateId', $this->decryptionRightsManagementTemplateId);
    }

    /**
     * Sets the allowAdHocPermissions property value. The allowAdHocPermissions property
     *  @param bool|null $value Value to set for the allowAdHocPermissions property.
    */
    public function setAllowAdHocPermissions(?bool $value ): void {
        $this->allowAdHocPermissions = $value;
    }

    /**
     * Sets the allowMailForwarding property value. The allowMailForwarding property
     *  @param bool|null $value Value to set for the allowMailForwarding property.
    */
    public function setAllowMailForwarding(?bool $value ): void {
        $this->allowMailForwarding = $value;
    }

    /**
     * Sets the decryptionRightsManagementTemplateId property value. The decryptionRightsManagementTemplateId property
     *  @param string|null $value Value to set for the decryptionRightsManagementTemplateId property.
    */
    public function setDecryptionRightsManagementTemplateId(?string $value ): void {
        $this->decryptionRightsManagementTemplateId = $value;
    }

}
