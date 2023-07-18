<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TextClassificationRequest extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new textClassificationRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TextClassificationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TextClassificationRequest {
        return new TextClassificationRequest();
    }

    /**
     * Gets the contentMetaData property value. The contentMetaData property
     * @return ClassificationRequestContentMetaData|null
    */
    public function getContentMetaData(): ?ClassificationRequestContentMetaData {
        $val = $this->getBackingStore()->get('contentMetaData');
        if (is_null($val) || $val instanceof ClassificationRequestContentMetaData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentMetaData'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentMetaData' => fn(ParseNode $n) => $o->setContentMetaData($n->getObjectValue([ClassificationRequestContentMetaData::class, 'createFromDiscriminatorValue'])),
            'fileExtension' => fn(ParseNode $n) => $o->setFileExtension($n->getStringValue()),
            'matchTolerancesToInclude' => fn(ParseNode $n) => $o->setMatchTolerancesToInclude($n->getEnumValue(MlClassificationMatchTolerance::class)),
            'scopesToRun' => fn(ParseNode $n) => $o->setScopesToRun($n->getEnumValue(SensitiveTypeScope::class)),
            'sensitiveTypeIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSensitiveTypeIds($val);
            },
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileExtension property value. The fileExtension property
     * @return string|null
    */
    public function getFileExtension(): ?string {
        $val = $this->getBackingStore()->get('fileExtension');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileExtension'");
    }

    /**
     * Gets the matchTolerancesToInclude property value. The matchTolerancesToInclude property
     * @return MlClassificationMatchTolerance|null
    */
    public function getMatchTolerancesToInclude(): ?MlClassificationMatchTolerance {
        $val = $this->getBackingStore()->get('matchTolerancesToInclude');
        if (is_null($val) || $val instanceof MlClassificationMatchTolerance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchTolerancesToInclude'");
    }

    /**
     * Gets the scopesToRun property value. The scopesToRun property
     * @return SensitiveTypeScope|null
    */
    public function getScopesToRun(): ?SensitiveTypeScope {
        $val = $this->getBackingStore()->get('scopesToRun');
        if (is_null($val) || $val instanceof SensitiveTypeScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopesToRun'");
    }

    /**
     * Gets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        $val = $this->getBackingStore()->get('sensitiveTypeIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveTypeIds'");
    }

    /**
     * Gets the text property value. The text property
     * @return string|null
    */
    public function getText(): ?string {
        $val = $this->getBackingStore()->get('text');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'text'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contentMetaData', $this->getContentMetaData());
        $writer->writeStringValue('fileExtension', $this->getFileExtension());
        $writer->writeEnumValue('matchTolerancesToInclude', $this->getMatchTolerancesToInclude());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('scopesToRun', $this->getScopesToRun());
        $writer->writeCollectionOfPrimitiveValues('sensitiveTypeIds', $this->getSensitiveTypeIds());
        $writer->writeStringValue('text', $this->getText());
    }

    /**
     * Sets the contentMetaData property value. The contentMetaData property
     * @param ClassificationRequestContentMetaData|null $value Value to set for the contentMetaData property.
    */
    public function setContentMetaData(?ClassificationRequestContentMetaData $value): void {
        $this->getBackingStore()->set('contentMetaData', $value);
    }

    /**
     * Sets the fileExtension property value. The fileExtension property
     * @param string|null $value Value to set for the fileExtension property.
    */
    public function setFileExtension(?string $value): void {
        $this->getBackingStore()->set('fileExtension', $value);
    }

    /**
     * Sets the matchTolerancesToInclude property value. The matchTolerancesToInclude property
     * @param MlClassificationMatchTolerance|null $value Value to set for the matchTolerancesToInclude property.
    */
    public function setMatchTolerancesToInclude(?MlClassificationMatchTolerance $value): void {
        $this->getBackingStore()->set('matchTolerancesToInclude', $value);
    }

    /**
     * Sets the scopesToRun property value. The scopesToRun property
     * @param SensitiveTypeScope|null $value Value to set for the scopesToRun property.
    */
    public function setScopesToRun(?SensitiveTypeScope $value): void {
        $this->getBackingStore()->set('scopesToRun', $value);
    }

    /**
     * Sets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value): void {
        $this->getBackingStore()->set('sensitiveTypeIds', $value);
    }

    /**
     * Sets the text property value. The text property
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

}
