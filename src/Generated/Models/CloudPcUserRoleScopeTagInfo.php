<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcUserRoleScopeTagInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Scope tag display name.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $roleScopeTagId Scope tag ID.
    */
    private ?string $roleScopeTagId = null;
    
    /**
     * Instantiates a new cloudPcUserRoleScopeTagInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcUserRoleScopeTagInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcUserRoleScopeTagInfo {
        return new CloudPcUserRoleScopeTagInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Scope tag display name.
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
        return  [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'roleScopeTagId' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the roleScopeTagId property value. Scope tag ID.
     * @return string|null
    */
    public function getRoleScopeTagId(): ?string {
        return $this->roleScopeTagId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('roleScopeTagId', $this->roleScopeTagId);
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
     * Sets the displayName property value. Scope tag display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the roleScopeTagId property value. Scope tag ID.
     *  @param string|null $value Value to set for the roleScopeTagId property.
    */
    public function setRoleScopeTagId(?string $value ): void {
        $this->roleScopeTagId = $value;
    }

}
