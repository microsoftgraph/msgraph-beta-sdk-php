<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QualityUpdateCatalogEntry extends SoftwareUpdateCatalogEntry implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isExpeditable Indicates whether the content can be deployed as an expedited quality update. Read-only.
    */
    private ?bool $isExpeditable = null;
    
    /**
     * @var QualityUpdateClassification|null $qualityUpdateClassification The classification on the quality update. Possible values are: all, security, nonSecurity, unknownFutureValue. Read-only.
    */
    private ?QualityUpdateClassification $qualityUpdateClassification = null;
    
    /**
     * Instantiates a new QualityUpdateCatalogEntry and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QualityUpdateCatalogEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QualityUpdateCatalogEntry {
        return new QualityUpdateCatalogEntry();
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
            'isExpeditable' => function (ParseNode $n) use ($o) { $o->setIsExpeditable($n->getBooleanValue()); },
            'qualityUpdateClassification' => function (ParseNode $n) use ($o) { $o->setQualityUpdateClassification($n->getEnumValue(QualityUpdateClassification::class)); },
        ]);
    }

    /**
     * Gets the isExpeditable property value. Indicates whether the content can be deployed as an expedited quality update. Read-only.
     * @return bool|null
    */
    public function getIsExpeditable(): ?bool {
        return $this->isExpeditable;
    }

    /**
     * Gets the qualityUpdateClassification property value. The classification on the quality update. Possible values are: all, security, nonSecurity, unknownFutureValue. Read-only.
     * @return QualityUpdateClassification|null
    */
    public function getQualityUpdateClassification(): ?QualityUpdateClassification {
        return $this->qualityUpdateClassification;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isExpeditable', $this->isExpeditable);
        $writer->writeEnumValue('qualityUpdateClassification', $this->qualityUpdateClassification);
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
     * Sets the isExpeditable property value. Indicates whether the content can be deployed as an expedited quality update. Read-only.
     *  @param bool|null $value Value to set for the isExpeditable property.
    */
    public function setIsExpeditable(?bool $value ): void {
        $this->isExpeditable = $value;
    }

    /**
     * Sets the qualityUpdateClassification property value. The classification on the quality update. Possible values are: all, security, nonSecurity, unknownFutureValue. Read-only.
     *  @param QualityUpdateClassification|null $value Value to set for the qualityUpdateClassification property.
    */
    public function setQualityUpdateClassification(?QualityUpdateClassification $value ): void {
        $this->qualityUpdateClassification = $value;
    }

}
