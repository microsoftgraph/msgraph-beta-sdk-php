<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingComparison implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DeviceManagementComparisonResult|null $comparisonResult Setting comparison result. Possible values are: unknown, equal, notEqual, added, removed. */
    private ?DeviceManagementComparisonResult $comparisonResult = null;
    
    /** @var string|null $currentValueJson JSON representation of current intent (or) template setting's value */
    private ?string $currentValueJson = null;
    
    /** @var string|null $definitionId The ID of the setting definition for this instance */
    private ?string $definitionId = null;
    
    /** @var string|null $displayName The setting's display name */
    private ?string $displayName = null;
    
    /** @var string|null $id The setting ID */
    private ?string $id = null;
    
    /** @var string|null $newValueJson JSON representation of new template setting's value */
    private ?string $newValueJson = null;
    
    /**
     * Instantiates a new deviceManagementSettingComparison and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingComparison
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingComparison {
        return new DeviceManagementSettingComparison();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the comparisonResult property value. Setting comparison result. Possible values are: unknown, equal, notEqual, added, removed.
     * @return DeviceManagementComparisonResult|null
    */
    public function getComparisonResult(): ?DeviceManagementComparisonResult {
        return $this->comparisonResult;
    }

    /**
     * Gets the currentValueJson property value. JSON representation of current intent (or) template setting's value
     * @return string|null
    */
    public function getCurrentValueJson(): ?string {
        return $this->currentValueJson;
    }

    /**
     * Gets the definitionId property value. The ID of the setting definition for this instance
     * @return string|null
    */
    public function getDefinitionId(): ?string {
        return $this->definitionId;
    }

    /**
     * Gets the displayName property value. The setting's display name
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
            'comparisonResult' => function (self $o, ParseNode $n) { $o->setComparisonResult($n->getEnumValue(DeviceManagementComparisonResult::class)); },
            'currentValueJson' => function (self $o, ParseNode $n) { $o->setCurrentValueJson($n->getStringValue()); },
            'definitionId' => function (self $o, ParseNode $n) { $o->setDefinitionId($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'newValueJson' => function (self $o, ParseNode $n) { $o->setNewValueJson($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. The setting ID
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the newValueJson property value. JSON representation of new template setting's value
     * @return string|null
    */
    public function getNewValueJson(): ?string {
        return $this->newValueJson;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('comparisonResult', $this->comparisonResult);
        $writer->writeStringValue('currentValueJson', $this->currentValueJson);
        $writer->writeStringValue('definitionId', $this->definitionId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('newValueJson', $this->newValueJson);
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
     * Sets the comparisonResult property value. Setting comparison result. Possible values are: unknown, equal, notEqual, added, removed.
     *  @param DeviceManagementComparisonResult|null $value Value to set for the comparisonResult property.
    */
    public function setComparisonResult(?DeviceManagementComparisonResult $value ): void {
        $this->comparisonResult = $value;
    }

    /**
     * Sets the currentValueJson property value. JSON representation of current intent (or) template setting's value
     *  @param string|null $value Value to set for the currentValueJson property.
    */
    public function setCurrentValueJson(?string $value ): void {
        $this->currentValueJson = $value;
    }

    /**
     * Sets the definitionId property value. The ID of the setting definition for this instance
     *  @param string|null $value Value to set for the definitionId property.
    */
    public function setDefinitionId(?string $value ): void {
        $this->definitionId = $value;
    }

    /**
     * Sets the displayName property value. The setting's display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. The setting ID
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the newValueJson property value. JSON representation of new template setting's value
     *  @param string|null $value Value to set for the newValueJson property.
    */
    public function setNewValueJson(?string $value ): void {
        $this->newValueJson = $value;
    }

}
