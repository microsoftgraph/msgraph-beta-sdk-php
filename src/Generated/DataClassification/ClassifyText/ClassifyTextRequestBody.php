<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ClassifyText;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\MlClassificationMatchTolerance;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\SensitiveTypeScope;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClassifyTextRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $fileExtension  */
    private ?string $fileExtension = null;
    
    /** @var MlClassificationMatchTolerance|null $matchTolerancesToInclude  */
    private ?MlClassificationMatchTolerance $matchTolerancesToInclude = null;
    
    /** @var SensitiveTypeScope|null $scopesToRun  */
    private ?SensitiveTypeScope $scopesToRun = null;
    
    /** @var array<string>|null $sensitiveTypeIds  */
    private ?array $sensitiveTypeIds = null;
    
    /** @var string|null $text  */
    private ?string $text = null;
    
    /**
     * Instantiates a new classifyTextRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassifyTextRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ClassifyTextRequestBody {
        return new ClassifyTextRequestBody();
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
        return  [
            'fileExtension' => function (self $o, ParseNode $n) { $o->setFileExtension($n->getStringValue()); },
            'matchTolerancesToInclude' => function (self $o, ParseNode $n) { $o->setMatchTolerancesToInclude($n->getEnumValue(MlClassificationMatchTolerance::class)); },
            'scopesToRun' => function (self $o, ParseNode $n) { $o->setScopesToRun($n->getEnumValue(SensitiveTypeScope::class)); },
            'sensitiveTypeIds' => function (self $o, ParseNode $n) { $o->setSensitiveTypeIds($n->getCollectionOfPrimitiveValues()); },
            'text' => function (self $o, ParseNode $n) { $o->setText($n->getStringValue()); },
        ];
    }

    /**
     * Gets the fileExtension property value. 
     * @return string|null
    */
    public function getFileExtension(): ?string {
        return $this->fileExtension;
    }

    /**
     * Gets the matchTolerancesToInclude property value. 
     * @return MlClassificationMatchTolerance|null
    */
    public function getMatchTolerancesToInclude(): ?MlClassificationMatchTolerance {
        return $this->matchTolerancesToInclude;
    }

    /**
     * Gets the scopesToRun property value. 
     * @return SensitiveTypeScope|null
    */
    public function getScopesToRun(): ?SensitiveTypeScope {
        return $this->scopesToRun;
    }

    /**
     * Gets the sensitiveTypeIds property value. 
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        return $this->sensitiveTypeIds;
    }

    /**
     * Gets the text property value. 
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileExtension', $this->fileExtension);
        $writer->writeEnumValue('matchTolerancesToInclude', $this->matchTolerancesToInclude);
        $writer->writeEnumValue('scopesToRun', $this->scopesToRun);
        $writer->writeCollectionOfPrimitiveValues('sensitiveTypeIds', $this->sensitiveTypeIds);
        $writer->writeStringValue('text', $this->text);
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
     * Sets the fileExtension property value. 
     *  @param string|null $value Value to set for the fileExtension property.
    */
    public function setFileExtension(?string $value ): void {
        $this->fileExtension = $value;
    }

    /**
     * Sets the matchTolerancesToInclude property value. 
     *  @param MlClassificationMatchTolerance|null $value Value to set for the matchTolerancesToInclude property.
    */
    public function setMatchTolerancesToInclude(?MlClassificationMatchTolerance $value ): void {
        $this->matchTolerancesToInclude = $value;
    }

    /**
     * Sets the scopesToRun property value. 
     *  @param SensitiveTypeScope|null $value Value to set for the scopesToRun property.
    */
    public function setScopesToRun(?SensitiveTypeScope $value ): void {
        $this->scopesToRun = $value;
    }

    /**
     * Sets the sensitiveTypeIds property value. 
     *  @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value ): void {
        $this->sensitiveTypeIds = $value;
    }

    /**
     * Sets the text property value. 
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

}
