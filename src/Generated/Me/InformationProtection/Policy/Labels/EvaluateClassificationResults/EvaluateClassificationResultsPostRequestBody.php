<?php

namespace Microsoft\Graph\Beta\Generated\Me\InformationProtection\Policy\Labels\EvaluateClassificationResults;

use Microsoft\Graph\Beta\Generated\Models\ClassificationResult;
use Microsoft\Graph\Beta\Generated\Models\ContentInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateClassificationResultsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ClassificationResult>|null $classificationResults The classificationResults property
    */
    private ?array $classificationResults = null;
    
    /**
     * @var ContentInfo|null $contentInfo The contentInfo property
    */
    private ?ContentInfo $contentInfo = null;
    
    /**
     * Instantiates a new evaluateClassificationResultsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateClassificationResultsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateClassificationResultsPostRequestBody {
        return new EvaluateClassificationResultsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the classificationResults property value. The classificationResults property
     * @return array<ClassificationResult>|null
    */
    public function getClassificationResults(): ?array {
        return $this->classificationResults;
    }

    /**
     * Gets the contentInfo property value. The contentInfo property
     * @return ContentInfo|null
    */
    public function getContentInfo(): ?ContentInfo {
        return $this->contentInfo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classificationResults' => function (ParseNode $n) use ($o) { $o->setClassificationResults($n->getCollectionOfObjectValues(array(ClassificationResult::class, 'createFromDiscriminatorValue'))); },
            'contentInfo' => function (ParseNode $n) use ($o) { $o->setContentInfo($n->getObjectValue(array(ContentInfo::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('classificationResults', $this->classificationResults);
        $writer->writeObjectValue('contentInfo', $this->contentInfo);
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
     * Sets the classificationResults property value. The classificationResults property
     *  @param array<ClassificationResult>|null $value Value to set for the classificationResults property.
    */
    public function setClassificationResults(?array $value ): void {
        $this->classificationResults = $value;
    }

    /**
     * Sets the contentInfo property value. The contentInfo property
     *  @param ContentInfo|null $value Value to set for the contentInfo property.
    */
    public function setContentInfo(?ContentInfo $value ): void {
        $this->contentInfo = $value;
    }

}
