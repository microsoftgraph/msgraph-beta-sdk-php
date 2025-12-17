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
     * Gets the displayName property value. The display name of this gallery image. For example, Windows 11 Enterprise + Microsoft 365 Apps 22H2. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the endDate property value. The date when the status of image becomes supportedWithWarning. Users can still provision new Cloud PCs if the current time is later than endDate and earlier than expirationDate. For example, assume the endDate of a gallery image is 2023-9-14 and expirationDate is 2024-3-14, users are able to provision new Cloud PCs if today is 2023-10-01. Read-only.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        $val = $this->getBackingStore()->get('endDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDate'");
    }

    /**
     * Gets the expirationDate property value. The date when the image is no longer available. Users are unable to provision new Cloud PCs if the current time is later than expirationDate. The value is usually endDate plus six months. For example, if the startDate is 2025-10-14, the expirationDate is usually 2026-04-14. Read-only.
     * @return Date|null
    */
    public function getExpirationDate(): ?Date {
        $val = $this->getBackingStore()->get('expirationDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getDateValue()),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getDateValue()),
            'offer' => fn(ParseNode $n) => $o->setOffer($n->getStringValue()),
            'offerDisplayName' => fn(ParseNode $n) => $o->setOfferDisplayName($n->getStringValue()),
            'offerName' => fn(ParseNode $n) => $o->setOfferName($n->getStringValue()),
            'osArchitecture' => fn(ParseNode $n) => $o->setOsArchitecture($n->getEnumValue(CloudPcImageOsArchitectureType::class)),
            'osVersionNumber' => fn(ParseNode $n) => $o->setOsVersionNumber($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'publisherName' => fn(ParseNode $n) => $o->setPublisherName($n->getStringValue()),
            'recommendedSku' => fn(ParseNode $n) => $o->setRecommendedSku($n->getStringValue()),
            'sizeInGB' => fn(ParseNode $n) => $o->setSizeInGB($n->getIntegerValue()),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
            'skuDisplayName' => fn(ParseNode $n) => $o->setSkuDisplayName($n->getStringValue()),
            'skuName' => fn(ParseNode $n) => $o->setSkuName($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcGalleryImageStatus::class)),
        ]);
    }

    /**
     * Gets the offer property value. The offer name of this gallery image that is passed to ARM to retrieve the image resource. Read-only. The offer property is deprecated and will stop returning data on January 31, 2024. Going forward, use the offerName property.
     * @return string|null
    */
    public function getOffer(): ?string {
        $val = $this->getBackingStore()->get('offer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offer'");
    }

    /**
     * Gets the offerDisplayName property value. The official display offer name of this gallery image. For example, Windows 11 Enterprise. The offerDisplayName property is deprecated and will stop returning data on January 31, 2024.
     * @return string|null
    */
    public function getOfferDisplayName(): ?string {
        $val = $this->getBackingStore()->get('offerDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offerDisplayName'");
    }

    /**
     * Gets the offerName property value. The offer name of this gallery image that is passed to ARM to retrieve the image resource. Read-only.
     * @return string|null
    */
    public function getOfferName(): ?string {
        $val = $this->getBackingStore()->get('offerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offerName'");
    }

    /**
     * Gets the osArchitecture property value. The osArchitecture property
     * @return CloudPcImageOsArchitectureType|null
    */
    public function getOsArchitecture(): ?CloudPcImageOsArchitectureType {
        $val = $this->getBackingStore()->get('osArchitecture');
        if (is_null($val) || $val instanceof CloudPcImageOsArchitectureType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osArchitecture'");
    }

    /**
     * Gets the osVersionNumber property value. The operating system version of this gallery image. For example, 10.0.22000.296. Read-only.
     * @return string|null
    */
    public function getOsVersionNumber(): ?string {
        $val = $this->getBackingStore()->get('osVersionNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersionNumber'");
    }

    /**
     * Gets the publisher property value. The publisher name of this gallery image that is passed to ARM to retrieve the image resource. Read-only. The publisher property is deprecated and will stop returning data on January 31, 2024. Going forward, use the publisherName property.
     * @return string|null
    */
    public function getPublisher(): ?string {
        $val = $this->getBackingStore()->get('publisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisher'");
    }

    /**
     * Gets the publisherName property value. The publisher name of this gallery image that is passed to ARM to retrieve the image resource. Read-only.
     * @return string|null
    */
    public function getPublisherName(): ?string {
        $val = $this->getBackingStore()->get('publisherName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisherName'");
    }

    /**
     * Gets the recommendedSku property value. The recommended Cloud PC SKU for this gallery image. Read-only. The recommendedSku property is deprecated and will stop returning data on January 31, 2024.
     * @return string|null
    */
    public function getRecommendedSku(): ?string {
        $val = $this->getBackingStore()->get('recommendedSku');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendedSku'");
    }

    /**
     * Gets the sizeInGB property value. Indicates the size of this image in gigabytes. For example, 64. Read-only.
     * @return int|null
    */
    public function getSizeInGB(): ?int {
        $val = $this->getBackingStore()->get('sizeInGB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sizeInGB'");
    }

    /**
     * Gets the sku property value. The SKU name of this image that is passed to ARM to retrieve the image resource. Read-only. The sku property is deprecated and will stop returning data on January 31, 2024. Going forward, use the skuName property.
     * @return string|null
    */
    public function getSku(): ?string {
        $val = $this->getBackingStore()->get('sku');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sku'");
    }

    /**
     * Gets the skuDisplayName property value. The official display SKU name of this gallery image. For example, 2004. Read-only. The skuDisplayName property is deprecated and will stop returning data on January 31, 2024.
     * @return string|null
    */
    public function getSkuDisplayName(): ?string {
        $val = $this->getBackingStore()->get('skuDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuDisplayName'");
    }

    /**
     * Gets the skuName property value. The SKU name of this image that is passed to ARM to retrieve the image resource. Read-only.
     * @return string|null
    */
    public function getSkuName(): ?string {
        $val = $this->getBackingStore()->get('skuName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuName'");
    }

    /**
     * Gets the startDate property value. The date when the Cloud PC image is available for provisioning new Cloud PCs. For example, 2022-09-20. Read-only.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        $val = $this->getBackingStore()->get('startDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Gets the status property value. The status of the gallery image on the Cloud PC. The possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. The default value is supported. Read-only.
     * @return CloudPcGalleryImageStatus|null
    */
    public function getStatus(): ?CloudPcGalleryImageStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CloudPcGalleryImageStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
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
        $writer->writeStringValue('offerName', $this->getOfferName());
        $writer->writeEnumValue('osArchitecture', $this->getOsArchitecture());
        $writer->writeStringValue('osVersionNumber', $this->getOsVersionNumber());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeStringValue('publisherName', $this->getPublisherName());
        $writer->writeStringValue('recommendedSku', $this->getRecommendedSku());
        $writer->writeIntegerValue('sizeInGB', $this->getSizeInGB());
        $writer->writeStringValue('sku', $this->getSku());
        $writer->writeStringValue('skuDisplayName', $this->getSkuDisplayName());
        $writer->writeStringValue('skuName', $this->getSkuName());
        $writer->writeDateValue('startDate', $this->getStartDate());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the displayName property value. The display name of this gallery image. For example, Windows 11 Enterprise + Microsoft 365 Apps 22H2. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDate property value. The date when the status of image becomes supportedWithWarning. Users can still provision new Cloud PCs if the current time is later than endDate and earlier than expirationDate. For example, assume the endDate of a gallery image is 2023-9-14 and expirationDate is 2024-3-14, users are able to provision new Cloud PCs if today is 2023-10-01. Read-only.
     * @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the expirationDate property value. The date when the image is no longer available. Users are unable to provision new Cloud PCs if the current time is later than expirationDate. The value is usually endDate plus six months. For example, if the startDate is 2025-10-14, the expirationDate is usually 2026-04-14. Read-only.
     * @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value): void {
        $this->getBackingStore()->set('expirationDate', $value);
    }

    /**
     * Sets the offer property value. The offer name of this gallery image that is passed to ARM to retrieve the image resource. Read-only. The offer property is deprecated and will stop returning data on January 31, 2024. Going forward, use the offerName property.
     * @param string|null $value Value to set for the offer property.
    */
    public function setOffer(?string $value): void {
        $this->getBackingStore()->set('offer', $value);
    }

    /**
     * Sets the offerDisplayName property value. The official display offer name of this gallery image. For example, Windows 11 Enterprise. The offerDisplayName property is deprecated and will stop returning data on January 31, 2024.
     * @param string|null $value Value to set for the offerDisplayName property.
    */
    public function setOfferDisplayName(?string $value): void {
        $this->getBackingStore()->set('offerDisplayName', $value);
    }

    /**
     * Sets the offerName property value. The offer name of this gallery image that is passed to ARM to retrieve the image resource. Read-only.
     * @param string|null $value Value to set for the offerName property.
    */
    public function setOfferName(?string $value): void {
        $this->getBackingStore()->set('offerName', $value);
    }

    /**
     * Sets the osArchitecture property value. The osArchitecture property
     * @param CloudPcImageOsArchitectureType|null $value Value to set for the osArchitecture property.
    */
    public function setOsArchitecture(?CloudPcImageOsArchitectureType $value): void {
        $this->getBackingStore()->set('osArchitecture', $value);
    }

    /**
     * Sets the osVersionNumber property value. The operating system version of this gallery image. For example, 10.0.22000.296. Read-only.
     * @param string|null $value Value to set for the osVersionNumber property.
    */
    public function setOsVersionNumber(?string $value): void {
        $this->getBackingStore()->set('osVersionNumber', $value);
    }

    /**
     * Sets the publisher property value. The publisher name of this gallery image that is passed to ARM to retrieve the image resource. Read-only. The publisher property is deprecated and will stop returning data on January 31, 2024. Going forward, use the publisherName property.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the publisherName property value. The publisher name of this gallery image that is passed to ARM to retrieve the image resource. Read-only.
     * @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value): void {
        $this->getBackingStore()->set('publisherName', $value);
    }

    /**
     * Sets the recommendedSku property value. The recommended Cloud PC SKU for this gallery image. Read-only. The recommendedSku property is deprecated and will stop returning data on January 31, 2024.
     * @param string|null $value Value to set for the recommendedSku property.
    */
    public function setRecommendedSku(?string $value): void {
        $this->getBackingStore()->set('recommendedSku', $value);
    }

    /**
     * Sets the sizeInGB property value. Indicates the size of this image in gigabytes. For example, 64. Read-only.
     * @param int|null $value Value to set for the sizeInGB property.
    */
    public function setSizeInGB(?int $value): void {
        $this->getBackingStore()->set('sizeInGB', $value);
    }

    /**
     * Sets the sku property value. The SKU name of this image that is passed to ARM to retrieve the image resource. Read-only. The sku property is deprecated and will stop returning data on January 31, 2024. Going forward, use the skuName property.
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->getBackingStore()->set('sku', $value);
    }

    /**
     * Sets the skuDisplayName property value. The official display SKU name of this gallery image. For example, 2004. Read-only. The skuDisplayName property is deprecated and will stop returning data on January 31, 2024.
     * @param string|null $value Value to set for the skuDisplayName property.
    */
    public function setSkuDisplayName(?string $value): void {
        $this->getBackingStore()->set('skuDisplayName', $value);
    }

    /**
     * Sets the skuName property value. The SKU name of this image that is passed to ARM to retrieve the image resource. Read-only.
     * @param string|null $value Value to set for the skuName property.
    */
    public function setSkuName(?string $value): void {
        $this->getBackingStore()->set('skuName', $value);
    }

    /**
     * Sets the startDate property value. The date when the Cloud PC image is available for provisioning new Cloud PCs. For example, 2022-09-20. Read-only.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the status property value. The status of the gallery image on the Cloud PC. The possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. The default value is supported. Read-only.
     * @param CloudPcGalleryImageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcGalleryImageStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
