<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class CloudPcGalleryImage extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcGalleryImage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcGalleryImage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcGalleryImage {
        return new CloudPcGalleryImage();
    }

    /**
     * Gets the displayName property value. The official display name of the gallery image. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the endDate property value. The date in which this image is no longer within long-term support. The Cloud PC continues to provide short-term support. Read-only.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        return $this->getBackingStore()->get('endDate');
    }

    /**
     * Gets the expirationDate property value. The date when the image is no longer available. Read-only.
     * @return Date|null
    */
    public function getExpirationDate(): ?Date {
        return $this->getBackingStore()->get('expirationDate');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getDateValue()),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getDateValue()),
            'offer' => fn(ParseNode $n) => $o->setOffer($n->getStringValue()),
            'offerDisplayName' => fn(ParseNode $n) => $o->setOfferDisplayName($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'recommendedSku' => fn(ParseNode $n) => $o->setRecommendedSku($n->getStringValue()),
            'sizeInGB' => fn(ParseNode $n) => $o->setSizeInGB($n->getIntegerValue()),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
            'skuDisplayName' => fn(ParseNode $n) => $o->setSkuDisplayName($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcGalleryImageStatus::class)),
        ]);
    }

    /**
     * Gets the offer property value. The offer name of the gallery image. This value is passed to Azure to get the image resource. Read-only.
     * @return string|null
    */
    public function getOffer(): ?string {
        return $this->getBackingStore()->get('offer');
    }

    /**
     * Gets the offerDisplayName property value. The official display offer name of the gallery image. For example, Windows 10 Enterprise + OS Optimizations. Read-only.
     * @return string|null
    */
    public function getOfferDisplayName(): ?string {
        return $this->getBackingStore()->get('offerDisplayName');
    }

    /**
     * Gets the publisher property value. The publisher name of the gallery image. This value is passed to Azure to get the image resource. Read-only.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->getBackingStore()->get('publisher');
    }

    /**
     * Gets the recommendedSku property value. Recommended Cloud PC SKU for this gallery image. Read-only.
     * @return string|null
    */
    public function getRecommendedSku(): ?string {
        return $this->getBackingStore()->get('recommendedSku');
    }

    /**
     * Gets the sizeInGB property value. The size of this image in gigabytes. Read-only.
     * @return int|null
    */
    public function getSizeInGB(): ?int {
        return $this->getBackingStore()->get('sizeInGB');
    }

    /**
     * Gets the sku property value. The SKU name of the gallery image. This value is passed to Azure to get the image resource. Read-only.
     * @return string|null
    */
    public function getSku(): ?string {
        return $this->getBackingStore()->get('sku');
    }

    /**
     * Gets the skuDisplayName property value. The official display stock keeping unit (SKU) name of this gallery image. For example, 2004. Read-only.
     * @return string|null
    */
    public function getSkuDisplayName(): ?string {
        return $this->getBackingStore()->get('skuDisplayName');
    }

    /**
     * Gets the startDate property value. The date when the image becomes available. Read-only.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        return $this->getBackingStore()->get('startDate');
    }

    /**
     * Gets the status property value. The status of the gallery image on the Cloud PC. Possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. Read-only.
     * @return CloudPcGalleryImageStatus|null
    */
    public function getStatus(): ?CloudPcGalleryImageStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateValue('endDate', $this->getEndDate());
        $writer->writeDateValue('expirationDate', $this->getExpirationDate());
        $writer->writeStringValue('offer', $this->getOffer());
        $writer->writeStringValue('offerDisplayName', $this->getOfferDisplayName());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeStringValue('recommendedSku', $this->getRecommendedSku());
        $writer->writeIntegerValue('sizeInGB', $this->getSizeInGB());
        $writer->writeStringValue('sku', $this->getSku());
        $writer->writeStringValue('skuDisplayName', $this->getSkuDisplayName());
        $writer->writeDateValue('startDate', $this->getStartDate());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the displayName property value. The official display name of the gallery image. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDate property value. The date in which this image is no longer within long-term support. The Cloud PC continues to provide short-term support. Read-only.
     * @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the expirationDate property value. The date when the image is no longer available. Read-only.
     * @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value): void {
        $this->getBackingStore()->set('expirationDate', $value);
    }

    /**
     * Sets the offer property value. The offer name of the gallery image. This value is passed to Azure to get the image resource. Read-only.
     * @param string|null $value Value to set for the offer property.
    */
    public function setOffer(?string $value): void {
        $this->getBackingStore()->set('offer', $value);
    }

    /**
     * Sets the offerDisplayName property value. The official display offer name of the gallery image. For example, Windows 10 Enterprise + OS Optimizations. Read-only.
     * @param string|null $value Value to set for the offerDisplayName property.
    */
    public function setOfferDisplayName(?string $value): void {
        $this->getBackingStore()->set('offerDisplayName', $value);
    }

    /**
     * Sets the publisher property value. The publisher name of the gallery image. This value is passed to Azure to get the image resource. Read-only.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the recommendedSku property value. Recommended Cloud PC SKU for this gallery image. Read-only.
     * @param string|null $value Value to set for the recommendedSku property.
    */
    public function setRecommendedSku(?string $value): void {
        $this->getBackingStore()->set('recommendedSku', $value);
    }

    /**
     * Sets the sizeInGB property value. The size of this image in gigabytes. Read-only.
     * @param int|null $value Value to set for the sizeInGB property.
    */
    public function setSizeInGB(?int $value): void {
        $this->getBackingStore()->set('sizeInGB', $value);
    }

    /**
     * Sets the sku property value. The SKU name of the gallery image. This value is passed to Azure to get the image resource. Read-only.
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->getBackingStore()->set('sku', $value);
    }

    /**
     * Sets the skuDisplayName property value. The official display stock keeping unit (SKU) name of this gallery image. For example, 2004. Read-only.
     * @param string|null $value Value to set for the skuDisplayName property.
    */
    public function setSkuDisplayName(?string $value): void {
        $this->getBackingStore()->set('skuDisplayName', $value);
    }

    /**
     * Sets the startDate property value. The date when the image becomes available. Read-only.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the status property value. The status of the gallery image on the Cloud PC. Possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. Read-only.
     * @param CloudPcGalleryImageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcGalleryImageStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
