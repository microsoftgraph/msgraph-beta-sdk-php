<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SiteArchivalDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SiteArchivalDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SiteArchivalDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SiteArchivalDetails {
        return new SiteArchivalDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the archivedBy property value. The archivedBy property
     * @return IdentitySet|null
    */
    public function getArchivedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('archivedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivedBy'");
    }

    /**
     * Gets the archivedDateTime property value. The archivedDateTime property
     * @return DateTime|null
    */
    public function getArchivedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('archivedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivedDateTime'");
    }

    /**
     * Gets the archiveStatus property value. Represents the current archive status of the site collection. Returned only on $select.
     * @return SiteArchiveStatus|null
    */
    public function getArchiveStatus(): ?SiteArchiveStatus {
        $val = $this->getBackingStore()->get('archiveStatus');
        if (is_null($val) || $val instanceof SiteArchiveStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archiveStatus'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'archivedBy' => fn(ParseNode $n) => $o->setArchivedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'archivedDateTime' => fn(ParseNode $n) => $o->setArchivedDateTime($n->getDateTimeValue()),
            'archiveStatus' => fn(ParseNode $n) => $o->setArchiveStatus($n->getEnumValue(SiteArchiveStatus::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('archivedBy', $this->getArchivedBy());
        $writer->writeDateTimeValue('archivedDateTime', $this->getArchivedDateTime());
        $writer->writeEnumValue('archiveStatus', $this->getArchiveStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the archivedBy property value. The archivedBy property
     * @param IdentitySet|null $value Value to set for the archivedBy property.
    */
    public function setArchivedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('archivedBy', $value);
    }

    /**
     * Sets the archivedDateTime property value. The archivedDateTime property
     * @param DateTime|null $value Value to set for the archivedDateTime property.
    */
    public function setArchivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('archivedDateTime', $value);
    }

    /**
     * Sets the archiveStatus property value. Represents the current archive status of the site collection. Returned only on $select.
     * @param SiteArchiveStatus|null $value Value to set for the archiveStatus property.
    */
    public function setArchiveStatus(?SiteArchiveStatus $value): void {
        $this->getBackingStore()->set('archiveStatus', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
