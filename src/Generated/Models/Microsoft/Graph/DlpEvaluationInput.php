<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpEvaluationInput implements AdditionalDataHolder, Parsable 
{
    /** @var AccessScope|null $accessScope  */
    private ?AccessScope $accessScope = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var CurrentLabel|null $currentLabel  */
    private ?CurrentLabel $currentLabel = null;
    
    /** @var array<DiscoveredSensitiveType>|null $discoveredSensitiveTypes  */
    private ?array $discoveredSensitiveTypes = null;
    
    /**
     * Instantiates a new dlpEvaluationInput and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DlpEvaluationInput
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DlpEvaluationInput {
        return new DlpEvaluationInput();
    }

    /**
     * Gets the accessScope property value. 
     * @return AccessScope|null
    */
    public function getAccessScope(): ?AccessScope {
        return $this->accessScope;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the currentLabel property value. 
     * @return CurrentLabel|null
    */
    public function getCurrentLabel(): ?CurrentLabel {
        return $this->currentLabel;
    }

    /**
     * Gets the discoveredSensitiveTypes property value. 
     * @return array<DiscoveredSensitiveType>|null
    */
    public function getDiscoveredSensitiveTypes(): ?array {
        return $this->discoveredSensitiveTypes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'accessScope' => function (self $o, ParseNode $n) { $o->setAccessScope($n->getEnumValue(AccessScope::class)); },
            'currentLabel' => function (self $o, ParseNode $n) { $o->setCurrentLabel($n->getObjectValue(CurrentLabel::class)); },
            'discoveredSensitiveTypes' => function (self $o, ParseNode $n) { $o->setDiscoveredSensitiveTypes($n->getCollectionOfObjectValues(DiscoveredSensitiveType::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessScope', $this->accessScope);
        $writer->writeObjectValue('currentLabel', $this->currentLabel);
        $writer->writeCollectionOfObjectValues('discoveredSensitiveTypes', $this->discoveredSensitiveTypes);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessScope property value. 
     *  @param AccessScope|null $value Value to set for the accessScope property.
    */
    public function setAccessScope(?AccessScope $value ): void {
        $this->accessScope = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the currentLabel property value. 
     *  @param CurrentLabel|null $value Value to set for the currentLabel property.
    */
    public function setCurrentLabel(?CurrentLabel $value ): void {
        $this->currentLabel = $value;
    }

    /**
     * Sets the discoveredSensitiveTypes property value. 
     *  @param array<DiscoveredSensitiveType>|null $value Value to set for the discoveredSensitiveTypes property.
    */
    public function setDiscoveredSensitiveTypes(?array $value ): void {
        $this->discoveredSensitiveTypes = $value;
    }

}
