<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MachineLearningDetectedSensitiveContent extends DetectedSensitiveContent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var MlClassificationMatchTolerance|null $matchTolerance The matchTolerance property
    */
    private ?MlClassificationMatchTolerance $matchTolerance = null;
    
    /**
     * @var string|null $modelVersion The modelVersion property
    */
    private ?string $modelVersion = null;
    
    /**
     * Instantiates a new MachineLearningDetectedSensitiveContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MachineLearningDetectedSensitiveContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MachineLearningDetectedSensitiveContent {
        return new MachineLearningDetectedSensitiveContent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'matchTolerance' => function (ParseNode $n) use ($o) { $o->setMatchTolerance($n->getEnumValue(MlClassificationMatchTolerance::class)); },
            'modelVersion' => function (ParseNode $n) use ($o) { $o->setModelVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the matchTolerance property value. The matchTolerance property
     * @return MlClassificationMatchTolerance|null
    */
    public function getMatchTolerance(): ?MlClassificationMatchTolerance {
        return $this->matchTolerance;
    }

    /**
     * Gets the modelVersion property value. The modelVersion property
     * @return string|null
    */
    public function getModelVersion(): ?string {
        return $this->modelVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('matchTolerance', $this->matchTolerance);
        $writer->writeStringValue('modelVersion', $this->modelVersion);
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
     * Sets the matchTolerance property value. The matchTolerance property
     *  @param MlClassificationMatchTolerance|null $value Value to set for the matchTolerance property.
    */
    public function setMatchTolerance(?MlClassificationMatchTolerance $value ): void {
        $this->matchTolerance = $value;
    }

    /**
     * Sets the modelVersion property value. The modelVersion property
     *  @param string|null $value Value to set for the modelVersion property.
    */
    public function setModelVersion(?string $value ): void {
        $this->modelVersion = $value;
    }

}
