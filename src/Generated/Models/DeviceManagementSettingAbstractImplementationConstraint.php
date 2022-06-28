<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingAbstractImplementationConstraint extends DeviceManagementConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $allowedAbstractImplementationDefinitionIds List of value which means not configured for the setting
    */
    private ?array $allowedAbstractImplementationDefinitionIds = null;
    
    /**
     * Instantiates a new DeviceManagementSettingAbstractImplementationConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingAbstractImplementationConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingAbstractImplementationConstraint {
        return new DeviceManagementSettingAbstractImplementationConstraint();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedAbstractImplementationDefinitionIds property value. List of value which means not configured for the setting
     * @return array<string>|null
    */
    public function getAllowedAbstractImplementationDefinitionIds(): ?array {
        return $this->allowedAbstractImplementationDefinitionIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedAbstractImplementationDefinitionIds' => function (ParseNode $n) use ($o) { $o->setAllowedAbstractImplementationDefinitionIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedAbstractImplementationDefinitionIds', $this->allowedAbstractImplementationDefinitionIds);
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
     * Sets the allowedAbstractImplementationDefinitionIds property value. List of value which means not configured for the setting
     *  @param array<string>|null $value Value to set for the allowedAbstractImplementationDefinitionIds property.
    */
    public function setAllowedAbstractImplementationDefinitionIds(?array $value ): void {
        $this->allowedAbstractImplementationDefinitionIds = $value;
    }

}
