<?php

namespace Microsoft\Graph\Beta\Generated\App\Calls\Item\Participants\Item\ReportSyntheticMedia;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\DetectionSeverity;
use Microsoft\Graph\Beta\Generated\Models\MediaMetadata;
use Microsoft\Graph\Beta\Generated\Models\SyntheticMediaDetectionDetail;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ReportSyntheticMediaPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ReportSyntheticMediaPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setIsMalicious(false);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportSyntheticMediaPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportSyntheticMediaPostRequestBody {
        return new ReportSyntheticMediaPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contentMetadata property value. The contentMetadata property
     * @return MediaMetadata|null
    */
    public function getContentMetadata(): ?MediaMetadata {
        $val = $this->getBackingStore()->get('contentMetadata');
        if (is_null($val) || $val instanceof MediaMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentMetadata'");
    }

    /**
     * Gets the detectionDateTime property value. The detectionDateTime property
     * @return DateTime|null
    */
    public function getDetectionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('detectionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionDateTime'");
    }

    /**
     * Gets the detections property value. The detections property
     * @return array<SyntheticMediaDetectionDetail>|null
    */
    public function getDetections(): ?array {
        $val = $this->getBackingStore()->get('detections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SyntheticMediaDetectionDetail::class);
            /** @var array<SyntheticMediaDetectionDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detections'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentMetadata' => fn(ParseNode $n) => $o->setContentMetadata($n->getObjectValue([MediaMetadata::class, 'createFromDiscriminatorValue'])),
            'detectionDateTime' => fn(ParseNode $n) => $o->setDetectionDateTime($n->getDateTimeValue()),
            'detections' => fn(ParseNode $n) => $o->setDetections($n->getCollectionOfObjectValues([SyntheticMediaDetectionDetail::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isMalicious' => fn(ParseNode $n) => $o->setIsMalicious($n->getBooleanValue()),
            'overallConfidence' => fn(ParseNode $n) => $o->setOverallConfidence($n->getFloatValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(DetectionSeverity::class)),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the isMalicious property value. The isMalicious property
     * @return bool|null
    */
    public function getIsMalicious(): ?bool {
        $val = $this->getBackingStore()->get('isMalicious');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMalicious'");
    }

    /**
     * Gets the overallConfidence property value. The overallConfidence property
     * @return float|null
    */
    public function getOverallConfidence(): ?float {
        $val = $this->getBackingStore()->get('overallConfidence');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overallConfidence'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return DetectionSeverity|null
    */
    public function getSeverity(): ?DetectionSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof DetectionSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('contentMetadata', $this->getContentMetadata());
        $writer->writeDateTimeValue('detectionDateTime', $this->getDetectionDateTime());
        $writer->writeCollectionOfObjectValues('detections', $this->getDetections());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isMalicious', $this->getIsMalicious());
        $writer->writeFloatValue('overallConfidence', $this->getOverallConfidence());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contentMetadata property value. The contentMetadata property
     * @param MediaMetadata|null $value Value to set for the contentMetadata property.
    */
    public function setContentMetadata(?MediaMetadata $value): void {
        $this->getBackingStore()->set('contentMetadata', $value);
    }

    /**
     * Sets the detectionDateTime property value. The detectionDateTime property
     * @param DateTime|null $value Value to set for the detectionDateTime property.
    */
    public function setDetectionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('detectionDateTime', $value);
    }

    /**
     * Sets the detections property value. The detections property
     * @param array<SyntheticMediaDetectionDetail>|null $value Value to set for the detections property.
    */
    public function setDetections(?array $value): void {
        $this->getBackingStore()->set('detections', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the isMalicious property value. The isMalicious property
     * @param bool|null $value Value to set for the isMalicious property.
    */
    public function setIsMalicious(?bool $value): void {
        $this->getBackingStore()->set('isMalicious', $value);
    }

    /**
     * Sets the overallConfidence property value. The overallConfidence property
     * @param float|null $value Value to set for the overallConfidence property.
    */
    public function setOverallConfidence(?float $value): void {
        $this->getBackingStore()->set('overallConfidence', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param DetectionSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?DetectionSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

}
