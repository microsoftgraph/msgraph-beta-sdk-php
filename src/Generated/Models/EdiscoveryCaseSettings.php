<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\Security\OcrSettings;
use Microsoft\Graph\Beta\Generated\Models\Security\RedundancyDetectionSettings;
use Microsoft\Graph\Beta\Generated\Models\Security\TopicModelingSettings;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryCaseSettings extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var OcrSettings|null $ocr The OCR (Optical Character Recognition) settings for the case.
    */
    private ?OcrSettings $ocr = null;
    
    /**
     * @var RedundancyDetectionSettings|null $redundancyDetection The redundancy (near duplicate and email threading) detection settings for the case.
    */
    private ?RedundancyDetectionSettings $redundancyDetection = null;
    
    /**
     * @var TopicModelingSettings|null $topicModeling The Topic Modeling (Themes) settings for the case.
    */
    private ?TopicModelingSettings $topicModeling = null;
    
    /**
     * Instantiates a new EdiscoveryCaseSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryCaseSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryCaseSettings {
        return new EdiscoveryCaseSettings();
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
            'ocr' => function (ParseNode $n) use ($o) { $o->setOcr($n->getObjectValue(array(OcrSettings::class, 'createFromDiscriminatorValue'))); },
            'redundancyDetection' => function (ParseNode $n) use ($o) { $o->setRedundancyDetection($n->getObjectValue(array(RedundancyDetectionSettings::class, 'createFromDiscriminatorValue'))); },
            'topicModeling' => function (ParseNode $n) use ($o) { $o->setTopicModeling($n->getObjectValue(array(TopicModelingSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the ocr property value. The OCR (Optical Character Recognition) settings for the case.
     * @return OcrSettings|null
    */
    public function getOcr(): ?OcrSettings {
        return $this->ocr;
    }

    /**
     * Gets the redundancyDetection property value. The redundancy (near duplicate and email threading) detection settings for the case.
     * @return RedundancyDetectionSettings|null
    */
    public function getRedundancyDetection(): ?RedundancyDetectionSettings {
        return $this->redundancyDetection;
    }

    /**
     * Gets the topicModeling property value. The Topic Modeling (Themes) settings for the case.
     * @return TopicModelingSettings|null
    */
    public function getTopicModeling(): ?TopicModelingSettings {
        return $this->topicModeling;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('ocr', $this->ocr);
        $writer->writeObjectValue('redundancyDetection', $this->redundancyDetection);
        $writer->writeObjectValue('topicModeling', $this->topicModeling);
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
     * Sets the ocr property value. The OCR (Optical Character Recognition) settings for the case.
     *  @param OcrSettings|null $value Value to set for the ocr property.
    */
    public function setOcr(?OcrSettings $value ): void {
        $this->ocr = $value;
    }

    /**
     * Sets the redundancyDetection property value. The redundancy (near duplicate and email threading) detection settings for the case.
     *  @param RedundancyDetectionSettings|null $value Value to set for the redundancyDetection property.
    */
    public function setRedundancyDetection(?RedundancyDetectionSettings $value ): void {
        $this->redundancyDetection = $value;
    }

    /**
     * Sets the topicModeling property value. The Topic Modeling (Themes) settings for the case.
     *  @param TopicModelingSettings|null $value Value to set for the topicModeling property.
    */
    public function setTopicModeling(?TopicModelingSettings $value ): void {
        $this->topicModeling = $value;
    }

}
