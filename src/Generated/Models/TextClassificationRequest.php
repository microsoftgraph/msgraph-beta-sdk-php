<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TextClassificationRequest extends Entity implements Parsable 
{
    /**
     * @var string|null $fileExtension The fileExtension property
    */
    private ?string $fileExtension = null;
    
    /**
     * @var MlClassificationMatchTolerance|null $matchTolerancesToInclude The matchTolerancesToInclude property
    */
    private ?MlClassificationMatchTolerance $matchTolerancesToInclude = null;
    
    /**
     * @var SensitiveTypeScope|null $scopesToRun The scopesToRun property
    */
    private ?SensitiveTypeScope $scopesToRun = null;
    
    /**
     * @var array<string>|null $sensitiveTypeIds The sensitiveTypeIds property
    */
    private ?array $sensitiveTypeIds = null;
    
    /**
     * @var string|null $text The text property
    */
    private ?string $text = null;
    
    /**
     * Instantiates a new TextClassificationRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.textClassificationRequest');
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileExtension' => function (ParseNode $n) use ($o) { $o->setFileExtension($n->getStringValue()); },
            'matchTolerancesToInclude' => function (ParseNode $n) use ($o) { $o->setMatchTolerancesToInclude($n->getEnumValue(MlClassificationMatchTolerance::class)); },
            'scopesToRun' => function (ParseNode $n) use ($o) { $o->setScopesToRun($n->getEnumValue(SensitiveTypeScope::class)); },
            'sensitiveTypeIds' => function (ParseNode $n) use ($o) { $o->setSensitiveTypeIds($n->getCollectionOfPrimitiveValues()); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileExtension property value. The fileExtension property
     * @return string|null
    */
    public function getFileExtension(): ?string {
        return $this->fileExtension;
    }

    /**
     * Gets the matchTolerancesToInclude property value. The matchTolerancesToInclude property
     * @return MlClassificationMatchTolerance|null
    */
    public function getMatchTolerancesToInclude(): ?MlClassificationMatchTolerance {
        return $this->matchTolerancesToInclude;
    }

    /**
     * Gets the scopesToRun property value. The scopesToRun property
     * @return SensitiveTypeScope|null
    */
    public function getScopesToRun(): ?SensitiveTypeScope {
        return $this->scopesToRun;
    }

    /**
     * Gets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        return $this->sensitiveTypeIds;
    }

    /**
     * Gets the text property value. The text property
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
        parent::serialize($writer);
        $writer->writeStringValue('fileExtension', $this->fileExtension);
        $writer->writeEnumValue('matchTolerancesToInclude', $this->matchTolerancesToInclude);
        $writer->writeEnumValue('scopesToRun', $this->scopesToRun);
        $writer->writeCollectionOfPrimitiveValues('sensitiveTypeIds', $this->sensitiveTypeIds);
        $writer->writeStringValue('text', $this->text);
    }

    /**
     * Sets the fileExtension property value. The fileExtension property
     *  @param string|null $value Value to set for the fileExtension property.
    */
    public function setFileExtension(?string $value ): void {
        $this->fileExtension = $value;
    }

    /**
     * Sets the matchTolerancesToInclude property value. The matchTolerancesToInclude property
     *  @param MlClassificationMatchTolerance|null $value Value to set for the matchTolerancesToInclude property.
    */
    public function setMatchTolerancesToInclude(?MlClassificationMatchTolerance $value ): void {
        $this->matchTolerancesToInclude = $value;
    }

    /**
     * Sets the scopesToRun property value. The scopesToRun property
     *  @param SensitiveTypeScope|null $value Value to set for the scopesToRun property.
    */
    public function setScopesToRun(?SensitiveTypeScope $value ): void {
        $this->scopesToRun = $value;
    }

    /**
     * Sets the sensitiveTypeIds property value. The sensitiveTypeIds property
     *  @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value ): void {
        $this->sensitiveTypeIds = $value;
    }

    /**
     * Sets the text property value. The text property
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

}
