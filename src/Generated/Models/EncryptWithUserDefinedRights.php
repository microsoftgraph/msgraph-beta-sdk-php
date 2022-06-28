<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EncryptWithUserDefinedRights extends EncryptContent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
