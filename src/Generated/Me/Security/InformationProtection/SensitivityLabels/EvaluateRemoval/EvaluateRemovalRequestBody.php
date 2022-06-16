<?php

namespace Microsoft\Graph\Beta\Generated\Me\Security\InformationProtection\SensitivityLabels\EvaluateRemoval;

use Microsoft\Graph\Beta\Generated\Models\Security\ContentInfo;
use Microsoft\Graph\Beta\Generated\Models\Security\DowngradeJustification;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateRemovalRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ContentInfo|null $contentInfo The contentInfo property */
    private ?ContentInfo $contentInfo = null;
    
    /** @var DowngradeJustification|null $downgradeJustification The downgradeJustification property */
    private ?DowngradeJustification $downgradeJustification = null;
    
    /**
     * Instantiates a new evaluateRemovalRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateRemovalRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateRemovalRequestBody {
        return new EvaluateRemovalRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentInfo property value. The contentInfo property
     * @return ContentInfo|null
    */
    public function getContentInfo(): ?ContentInfo {
        return $this->contentInfo;
    }

    /**
     * Gets the downgradeJustification property value. The downgradeJustification property
     * @return DowngradeJustification|null
    */
    public function getDowngradeJustification(): ?DowngradeJustification {
        return $this->downgradeJustification;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'contentInfo' => function (self $o, ParseNode $n) { $o->setContentInfo($n->getObjectValue(ContentInfo::class)); },
            'downgradeJustification' => function (self $o, ParseNode $n) { $o->setDowngradeJustification($n->getObjectValue(DowngradeJustification::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('contentInfo', $this->contentInfo);
        $writer->writeObjectValue('downgradeJustification', $this->downgradeJustification);
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
     * Sets the contentInfo property value. The contentInfo property
     *  @param ContentInfo|null $value Value to set for the contentInfo property.
    */
    public function setContentInfo(?ContentInfo $value ): void {
        $this->contentInfo = $value;
    }

    /**
     * Sets the downgradeJustification property value. The downgradeJustification property
     *  @param DowngradeJustification|null $value Value to set for the downgradeJustification property.
    */
    public function setDowngradeJustification(?DowngradeJustification $value ): void {
        $this->downgradeJustification = $value;
    }

}
