<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QualityUpdateReference extends WindowsUpdateReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var QualityUpdateClassification|null $classification Specifies the classification of the referenced content. Supports a subset of the values for qualityUpdateClassification. Possible values are: security, unknownFutureValue.
    */
    private ?QualityUpdateClassification $classification = null;
    
    /**
     * @var DateTime|null $releaseDateTime Specifies a quality update in the given servicingChannel with the given classification by date (i.e. the last update published on the specified date). Default value is security.
    */
    private ?DateTime $releaseDateTime = null;
    
    /**
     * Instantiates a new QualityUpdateReference and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QualityUpdateReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QualityUpdateReference {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsUpdates.expeditedQualityUpdateReference': return new ExpeditedQualityUpdateReference();
            }
        }
        return new QualityUpdateReference();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the classification property value. Specifies the classification of the referenced content. Supports a subset of the values for qualityUpdateClassification. Possible values are: security, unknownFutureValue.
     * @return QualityUpdateClassification|null
    */
    public function getClassification(): ?QualityUpdateClassification {
        return $this->classification;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classification' => function (ParseNode $n) use ($o) { $o->setClassification($n->getEnumValue(QualityUpdateClassification::class)); },
            'releaseDateTime' => function (ParseNode $n) use ($o) { $o->setReleaseDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the releaseDateTime property value. Specifies a quality update in the given servicingChannel with the given classification by date (i.e. the last update published on the specified date). Default value is security.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        return $this->releaseDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classification', $this->classification);
        $writer->writeDateTimeValue('releaseDateTime', $this->releaseDateTime);
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
     * Sets the classification property value. Specifies the classification of the referenced content. Supports a subset of the values for qualityUpdateClassification. Possible values are: security, unknownFutureValue.
     *  @param QualityUpdateClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?QualityUpdateClassification $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the releaseDateTime property value. Specifies a quality update in the given servicingChannel with the given classification by date (i.e. the last update published on the specified date). Default value is security.
     *  @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value ): void {
        $this->releaseDateTime = $value;
    }

}
