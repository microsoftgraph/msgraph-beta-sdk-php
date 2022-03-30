<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\CreateInstance;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceManagementSettingInstance;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateInstanceRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var array<string>|null $roleScopeTagIds  */
    private ?array $roleScopeTagIds = null;
    
    /** @var array<DeviceManagementSettingInstance>|null $settingsDelta  */
    private ?array $settingsDelta = null;
    
    /**
     * Instantiates a new createInstanceRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateInstanceRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CreateInstanceRequestBody {
        return new CreateInstanceRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. 
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
        return  [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'roleScopeTagIds' => function (self $o, ParseNode $n) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'settingsDelta' => function (self $o, ParseNode $n) { $o->setSettingsDelta($n->getCollectionOfObjectValues(DeviceManagementSettingInstance::class)); },
        ];
    }

    /**
     * Gets the roleScopeTagIds property value. 
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the settingsDelta property value. 
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getSettingsDelta(): ?array {
        return $this->settingsDelta;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeCollectionOfObjectValues('settingsDelta', $this->settingsDelta);
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
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. 
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the settingsDelta property value. 
     *  @param array<DeviceManagementSettingInstance>|null $value Value to set for the settingsDelta property.
    */
    public function setSettingsDelta(?array $value ): void {
        $this->settingsDelta = $value;
    }

}
