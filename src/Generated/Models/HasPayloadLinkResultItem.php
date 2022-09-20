<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HasPayloadLinkResultItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $error Exception information indicates if check for this item was successful or not.Empty string for no error.
    */
    private ?string $error = null;
    
    /**
     * @var bool|null $hasLink Indicate whether a payload has any link or not.
    */
    private ?bool $hasLink = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $payloadId Key of the Payload, In the format of Guid.
    */
    private ?string $payloadId = null;
    
    /**
     * @var array<DeviceAndAppManagementAssignmentSource>|null $sources The reason where the link comes from.
    */
    private ?array $sources = null;
    
    /**
     * Instantiates a new hasPayloadLinkResultItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.hasPayloadLinkResultItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HasPayloadLinkResultItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HasPayloadLinkResultItem {
        return new HasPayloadLinkResultItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the error property value. Exception information indicates if check for this item was successful or not.Empty string for no error.
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getStringValue()); },
            'hasLink' => function (ParseNode $n) use ($o) { $o->setHasLink($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'payloadId' => function (ParseNode $n) use ($o) { $o->setPayloadId($n->getStringValue()); },
            'sources' => function (ParseNode $n) use ($o) { $o->setSources($n->getCollectionOfEnumValues(DeviceAndAppManagementAssignmentSource::class)); },
        ];
    }

    /**
     * Gets the hasLink property value. Indicate whether a payload has any link or not.
     * @return bool|null
    */
    public function getHasLink(): ?bool {
        return $this->hasLink;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the payloadId property value. Key of the Payload, In the format of Guid.
     * @return string|null
    */
    public function getPayloadId(): ?string {
        return $this->payloadId;
    }

    /**
     * Gets the sources property value. The reason where the link comes from.
     * @return array<DeviceAndAppManagementAssignmentSource>|null
    */
    public function getSources(): ?array {
        return $this->sources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('error', $this->error);
        $writer->writeBooleanValue('hasLink', $this->hasLink);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('payloadId', $this->payloadId);
        $writer->writeCollectionOfEnumValues('sources', $this->sources);
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
     * Sets the error property value. Exception information indicates if check for this item was successful or not.Empty string for no error.
     *  @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the hasLink property value. Indicate whether a payload has any link or not.
     *  @param bool|null $value Value to set for the hasLink property.
    */
    public function setHasLink(?bool $value ): void {
        $this->hasLink = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the payloadId property value. Key of the Payload, In the format of Guid.
     *  @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value ): void {
        $this->payloadId = $value;
    }

    /**
     * Sets the sources property value. The reason where the link comes from.
     *  @param array<DeviceAndAppManagementAssignmentSource>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value ): void {
        $this->sources = $value;
    }

}
