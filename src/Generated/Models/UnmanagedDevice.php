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

class UnmanagedDevice implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new unmanagedDevice and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnmanagedDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnmanagedDevice {
        return new UnmanagedDevice();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deviceName property value. Device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the domain property value. Domain.
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->getBackingStore()->get('domain');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'lastLoggedOnUser' => fn(ParseNode $n) => $o->setLastLoggedOnUser($n->getStringValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            'macAddress' => fn(ParseNode $n) => $o->setMacAddress($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the ipAddress property value. IP address.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->getBackingStore()->get('ipAddress');
    }

    /**
     * Gets the lastLoggedOnUser property value. Last logged on user.
     * @return string|null
    */
    public function getLastLoggedOnUser(): ?string {
        return $this->getBackingStore()->get('lastLoggedOnUser');
    }

    /**
     * Gets the lastSeenDateTime property value. Last seen date and time.
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSeenDateTime');
    }

    /**
     * Gets the location property value. Location.
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->getBackingStore()->get('location');
    }

    /**
     * Gets the macAddress property value. MAC address.
     * @return string|null
    */
    public function getMacAddress(): ?string {
        return $this->getBackingStore()->get('macAddress');
    }

    /**
     * Gets the manufacturer property value. Manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the model property value. Model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the os property value. Operating system.
     * @return string|null
    */
    public function getOs(): ?string {
        return $this->getBackingStore()->get('os');
    }

    /**
     * Gets the osVersion property value. Operating system version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('lastLoggedOnUser', $this->getLastLoggedOnUser());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeStringValue('macAddress', $this->getMacAddress());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('os', $this->getOs());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deviceName property value. Device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the domain property value. Domain.
     *  @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->getBackingStore()->set('domain', $value);
    }

    /**
     * Sets the ipAddress property value. IP address.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the lastLoggedOnUser property value. Last logged on user.
     *  @param string|null $value Value to set for the lastLoggedOnUser property.
    */
    public function setLastLoggedOnUser(?string $value): void {
        $this->getBackingStore()->set('lastLoggedOnUser', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. Last seen date and time.
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the location property value. Location.
     *  @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the macAddress property value. MAC address.
     *  @param string|null $value Value to set for the macAddress property.
    */
    public function setMacAddress(?string $value): void {
        $this->getBackingStore()->set('macAddress', $value);
    }

    /**
     * Sets the manufacturer property value. Manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. Model.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the os property value. Operating system.
     *  @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->getBackingStore()->set('os', $value);
    }

    /**
     * Sets the osVersion property value. Operating system version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

}
