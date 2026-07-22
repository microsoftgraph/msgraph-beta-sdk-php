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

class SyncComponent implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SyncComponent and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SyncComponent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SyncComponent {
        return new SyncComponent();
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
            'moreInfo' => fn(ParseNode $n) => $o->setMoreInfo($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reportedDateTime' => fn(ParseNode $n) => $o->setReportedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SyncComponentStatus::class)),
        ];
    }

    /**
     * Gets the moreInfo property value. Indicates additional information for this sync stage. This is a flexible string that can be null (no additional info), a progress indicator such as '3/6' (completed out of total), or a list of individual item names. Read-only. Nullable.
     * @return string|null
    */
    public function getMoreInfo(): ?string {
        $val = $this->getBackingStore()->get('moreInfo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'moreInfo'");
    }

    /**
     * Gets the name property value. Indicates the sync stage name. The backend abstracts internal infrastructure into 6 user-facing stages. Fixed values are: notifyingDevice, deviceConnecting, policies, applications, scripts, compliance. Read-only. Not nullable.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the reportedDateTime property value. Indicates the date and time when this stage last reported status. The date and time information is shown using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only. Not nullable.
     * @return DateTime|null
    */
    public function getReportedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('reportedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportedDateTime'");
    }

    /**
     * Gets the status property value. A list of possible status states for a sync infrastructure component or policy during a device sync operation.
     * @return SyncComponentStatus|null
    */
    public function getStatus(): ?SyncComponentStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SyncComponentStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the moreInfo property value. Indicates additional information for this sync stage. This is a flexible string that can be null (no additional info), a progress indicator such as '3/6' (completed out of total), or a list of individual item names. Read-only. Nullable.
     * @param string|null $value Value to set for the moreInfo property.
    */
    public function setMoreInfo(?string $value): void {
        $this->getBackingStore()->set('moreInfo', $value);
    }

    /**
     * Sets the name property value. Indicates the sync stage name. The backend abstracts internal infrastructure into 6 user-facing stages. Fixed values are: notifyingDevice, deviceConnecting, policies, applications, scripts, compliance. Read-only. Not nullable.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reportedDateTime property value. Indicates the date and time when this stage last reported status. The date and time information is shown using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only. Not nullable.
     * @param DateTime|null $value Value to set for the reportedDateTime property.
    */
    public function setReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reportedDateTime', $value);
    }

    /**
     * Sets the status property value. A list of possible status states for a sync infrastructure component or policy during a device sync operation.
     * @param SyncComponentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SyncComponentStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
