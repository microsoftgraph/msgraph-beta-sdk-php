<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementUserRightsLocalUserOrGroup implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description Admin’s description of this local user or group.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $name The name of this local user or group.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $securityIdentifier The security identifier of this local user or group (e.g. S-1-5-32-544).
    */
    private ?string $securityIdentifier = null;
    
    /**
     * Instantiates a new deviceManagementUserRightsLocalUserOrGroup and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementUserRightsLocalUserOrGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementUserRightsLocalUserOrGroup {
        return new DeviceManagementUserRightsLocalUserOrGroup();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Admin’s description of this local user or group.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'securityIdentifier' => function (ParseNode $n) use ($o) { $o->setSecurityIdentifier($n->getStringValue()); },
        ];
    }

    /**
     * Gets the name property value. The name of this local user or group.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the securityIdentifier property value. The security identifier of this local user or group (e.g. S-1-5-32-544).
     * @return string|null
    */
    public function getSecurityIdentifier(): ?string {
        return $this->securityIdentifier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('securityIdentifier', $this->securityIdentifier);
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
     * Sets the description property value. Admin’s description of this local user or group.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the name property value. The name of this local user or group.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the securityIdentifier property value. The security identifier of this local user or group (e.g. S-1-5-32-544).
     *  @param string|null $value Value to set for the securityIdentifier property.
    */
    public function setSecurityIdentifier(?string $value ): void {
        $this->securityIdentifier = $value;
    }

}
