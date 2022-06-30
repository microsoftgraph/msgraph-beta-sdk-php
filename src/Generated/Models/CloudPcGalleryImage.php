<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class CloudPcGalleryImage extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The official display name of the gallery image. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var Date|null $endDate The date in which this image is no longer within long-term support. The Cloud PC will continue to provide short-term support. Read-only.
    */
    private ?Date $endDate = null;
    
    /**
     * @var Date|null $expirationDate The date when the image is no longer available. Read-only.
    */
    private ?Date $expirationDate = null;
    
    /**
     * @var string|null $offer The offer name of the gallery image. This value will be passed to Azure to get the image resource. Read-only.
    */
    private ?string $offer = null;
    
    /**
     * @var string|null $offerDisplayName The official display offer name of the gallery image. For example, Windows 10 Enterprise + OS Optimizations. Read-only.
    */
    private ?string $offerDisplayName = null;
    
    /**
     * @var string|null $publisher The publisher name of the gallery image. This value will be passed to Azure to get the image resource. Read-only.
    */
    private ?string $publisher = null;
    
    /**
     * @var string|null $recommendedSku Recommended Cloud PC SKU for this gallery image. Read-only.
    */
    private ?string $recommendedSku = null;
    
    /**
     * @var int|null $sizeInGB The size of this image in gigabytes. Read-only.
    */
    private ?int $sizeInGB = null;
    
    /**
     * @var string|null $sku The SKU name of the gallery image. This value will be passed to Azure to get the image resource. Read-only.
    */
    private ?string $sku = null;
    
    /**
     * @var string|null $skuDisplayName The official display stock keeping unit (SKU) name of this gallery image. For example, 2004. Read-only.
    */
    private ?string $skuDisplayName = null;
    
    /**
     * @var Date|null $startDate The date when the image becomes available. Read-only.
    */
    private ?Date $startDate = null;
    
    /**
     * @var CloudPcGalleryImageStatus|null $status The status of the gallery image on the Cloud PC. Possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. Read-only.
    */
    private ?CloudPcGalleryImageStatus $status = null;
    
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
        return $this->displayName;
    }

    /**
     * Gets the endDate property value. The date in which this image is no longer within long-term support. The Cloud PC will continue to provide short-term support. Read-only.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        return $this->endDate;
    }

    /**
     * Gets the expirationDate property value. The date when the image is no longer available. Read-only.
     * @return Date|null
    */
    public function getExpirationDate(): ?Date {
        return $this->expirationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'endDate' => function (ParseNode $n) use ($o) { $o->setEndDate($n->getDateValue()); },
            'expirationDate' => function (ParseNode $n) use ($o) { $o->setExpirationDate($n->getDateValue()); },
            'offer' => function (ParseNode $n) use ($o) { $o->setOffer($n->getStringValue()); },
            'offerDisplayName' => function (ParseNode $n) use ($o) { $o->setOfferDisplayName($n->getStringValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
            'recommendedSku' => function (ParseNode $n) use ($o) { $o->setRecommendedSku($n->getStringValue()); },
            'sizeInGB' => function (ParseNode $n) use ($o) { $o->setSizeInGB($n->getIntegerValue()); },
            'sku' => function (ParseNode $n) use ($o) { $o->setSku($n->getStringValue()); },
            'skuDisplayName' => function (ParseNode $n) use ($o) { $o->setSkuDisplayName($n->getStringValue()); },
            'startDate' => function (ParseNode $n) use ($o) { $o->setStartDate($n->getDateValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(CloudPcGalleryImageStatus::class)); },
        ]);
    }

    /**
     * Gets the offer property value. The offer name of the gallery image. This value will be passed to Azure to get the image resource. Read-only.
     * @return string|null
    */
    public function getOffer(): ?string {
        return $this->offer;
    }

    /**
     * Gets the offerDisplayName property value. The official display offer name of the gallery image. For example, Windows 10 Enterprise + OS Optimizations. Read-only.
     * @return string|null
    */
    public function getOfferDisplayName(): ?string {
        return $this->offerDisplayName;
    }

    /**
     * Gets the publisher property value. The publisher name of the gallery image. This value will be passed to Azure to get the image resource. Read-only.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the recommendedSku property value. Recommended Cloud PC SKU for this gallery image. Read-only.
     * @return string|null
    */
    public function getRecommendedSku(): ?string {
        return $this->recommendedSku;
    }

    /**
     * Gets the sizeInGB property value. The size of this image in gigabytes. Read-only.
     * @return int|null
    */
    public function getSizeInGB(): ?int {
        return $this->sizeInGB;
    }

    /**
     * Gets the sku property value. The SKU name of the gallery image. This value will be passed to Azure to get the image resource. Read-only.
     * @return string|null
    */
    public function getSku(): ?string {
        return $this->sku;
    }

    /**
     * Gets the skuDisplayName property value. The official display stock keeping unit (SKU) name of this gallery image. For example, 2004. Read-only.
     * @return string|null
    */
    public function getSkuDisplayName(): ?string {
        return $this->skuDisplayName;
    }

    /**
     * Gets the startDate property value. The date when the image becomes available. Read-only.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        return $this->startDate;
    }

    /**
     * Gets the status property value. The status of the gallery image on the Cloud PC. Possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. Read-only.
     * @return CloudPcGalleryImageStatus|null
    */
    public function getStatus(): ?CloudPcGalleryImageStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateValue('endDate', $this->endDate);
        $writer->writeDateValue('expirationDate', $this->expirationDate);
        $writer->writeStringValue('offer', $this->offer);
        $writer->writeStringValue('offerDisplayName', $this->offerDisplayName);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeStringValue('recommendedSku', $this->recommendedSku);
        $writer->writeIntegerValue('sizeInGB', $this->sizeInGB);
        $writer->writeStringValue('sku', $this->sku);
        $writer->writeStringValue('skuDisplayName', $this->skuDisplayName);
        $writer->writeDateValue('startDate', $this->startDate);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the displayName property value. The official display name of the gallery image. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endDate property value. The date in which this image is no longer within long-term support. The Cloud PC will continue to provide short-term support. Read-only.
     *  @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value ): void {
        $this->endDate = $value;
    }

    /**
     * Sets the expirationDate property value. The date when the image is no longer available. Read-only.
     *  @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value ): void {
        $this->expirationDate = $value;
    }

    /**
     * Sets the offer property value. The offer name of the gallery image. This value will be passed to Azure to get the image resource. Read-only.
     *  @param string|null $value Value to set for the offer property.
    */
    public function setOffer(?string $value ): void {
        $this->offer = $value;
    }

    /**
     * Sets the offerDisplayName property value. The official display offer name of the gallery image. For example, Windows 10 Enterprise + OS Optimizations. Read-only.
     *  @param string|null $value Value to set for the offerDisplayName property.
    */
    public function setOfferDisplayName(?string $value ): void {
        $this->offerDisplayName = $value;
    }

    /**
     * Sets the publisher property value. The publisher name of the gallery image. This value will be passed to Azure to get the image resource. Read-only.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the recommendedSku property value. Recommended Cloud PC SKU for this gallery image. Read-only.
     *  @param string|null $value Value to set for the recommendedSku property.
    */
    public function setRecommendedSku(?string $value ): void {
        $this->recommendedSku = $value;
    }

    /**
     * Sets the sizeInGB property value. The size of this image in gigabytes. Read-only.
     *  @param int|null $value Value to set for the sizeInGB property.
    */
    public function setSizeInGB(?int $value ): void {
        $this->sizeInGB = $value;
    }

    /**
     * Sets the sku property value. The SKU name of the gallery image. This value will be passed to Azure to get the image resource. Read-only.
     *  @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value ): void {
        $this->sku = $value;
    }

    /**
     * Sets the skuDisplayName property value. The official display stock keeping unit (SKU) name of this gallery image. For example, 2004. Read-only.
     *  @param string|null $value Value to set for the skuDisplayName property.
    */
    public function setSkuDisplayName(?string $value ): void {
        $this->skuDisplayName = $value;
    }

    /**
     * Sets the startDate property value. The date when the image becomes available. Read-only.
     *  @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value ): void {
        $this->startDate = $value;
    }

    /**
     * Sets the status property value. The status of the gallery image on the Cloud PC. Possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. Read-only.
     *  @param CloudPcGalleryImageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcGalleryImageStatus $value ): void {
        $this->status = $value;
    }

}
