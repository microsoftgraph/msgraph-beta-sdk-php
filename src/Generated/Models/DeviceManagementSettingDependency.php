<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingDependency implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceManagementConstraint>|null $constraints Collection of constraints for the dependency setting value
    */
    private ?array $constraints = null;
    
    /**
     * @var string|null $definitionId The setting definition ID of the setting depended on
    */
    private ?string $definitionId = null;
    
    /**
     * Instantiates a new deviceManagementSettingDependency and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingDependency
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingDependency {
        return new DeviceManagementSettingDependency();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the constraints property value. Collection of constraints for the dependency setting value
     * @return array<DeviceManagementConstraint>|null
    */
    public function getConstraints(): ?array {
        return $this->constraints;
    }

    /**
     * Gets the definitionId property value. The setting definition ID of the setting depended on
     * @return string|null
    */
    public function getDefinitionId(): ?string {
        return $this->definitionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'constraints' => function (ParseNode $n) use ($o) { $o->setConstraints($n->getCollectionOfObjectValues(array(DeviceManagementConstraint::class, 'createFromDiscriminatorValue'))); },
            'definitionId' => function (ParseNode $n) use ($o) { $o->setDefinitionId($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('constraints', $this->constraints);
        $writer->writeStringValue('definitionId', $this->definitionId);
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
     * Sets the constraints property value. Collection of constraints for the dependency setting value
     *  @param array<DeviceManagementConstraint>|null $value Value to set for the constraints property.
    */
    public function setConstraints(?array $value ): void {
        $this->constraints = $value;
    }

    /**
     * Sets the definitionId property value. The setting definition ID of the setting depended on
     *  @param string|null $value Value to set for the definitionId property.
    */
    public function setDefinitionId(?string $value ): void {
        $this->definitionId = $value;
    }

}
