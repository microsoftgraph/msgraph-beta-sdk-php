<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnmanagedDevice implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceName Device name.
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $domain Domain.
    */
    private ?string $domain = null;
    
    /**
     * @var string|null $ipAddress IP address.
    */
    private ?string $ipAddress = null;
    
    /**
     * @var string|null $lastLoggedOnUser Last logged on user.
    */
    private ?string $lastLoggedOnUser = null;
    
    /**
     * @var DateTime|null $lastSeenDateTime Last seen date and time.
    */
    private ?DateTime $lastSeenDateTime = null;
    
    /**
     * @var string|null $location Location.
    */
    private ?string $location = null;
    
    /**
     * @var string|null $macAddress MAC address.
    */
    private ?string $macAddress = null;
    
    /**
     * @var string|null $manufacturer Manufacturer.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model Model.
    */
    private ?string $model = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $os Operating system.
    */
    private ?string $os = null;
    
    /**
     * @var string|null $osVersion Operating system version.
    */
    private ?string $osVersion = null;
    
    /**
     * Instantiates a new unmanagedDevice and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.unmanagedDevice');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceName property value. Device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the domain property value. Domain.
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
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
        return $this->ipAddress;
    }

    /**
     * Gets the lastLoggedOnUser property value. Last logged on user.
     * @return string|null
    */
    public function getLastLoggedOnUser(): ?string {
        return $this->lastLoggedOnUser;
    }

    /**
     * Gets the lastSeenDateTime property value. Last seen date and time.
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->lastSeenDateTime;
    }

    /**
     * Gets the location property value. Location.
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Gets the macAddress property value. MAC address.
     * @return string|null
    */
    public function getMacAddress(): ?string {
        return $this->macAddress;
    }

    /**
     * Gets the manufacturer property value. Manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. Model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the os property value. Operating system.
     * @return string|null
    */
    public function getOs(): ?string {
        return $this->os;
    }

    /**
     * Gets the osVersion property value. Operating system version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('domain', $this->domain);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeStringValue('lastLoggedOnUser', $this->lastLoggedOnUser);
        $writer->writeDateTimeValue('lastSeenDateTime', $this->lastSeenDateTime);
        $writer->writeStringValue('location', $this->location);
        $writer->writeStringValue('macAddress', $this->macAddress);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('os', $this->os);
        $writer->writeStringValue('osVersion', $this->osVersion);
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
     * Sets the deviceName property value. Device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the domain property value. Domain.
     *  @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value ): void {
        $this->domain = $value;
    }

    /**
     * Sets the ipAddress property value. IP address.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the lastLoggedOnUser property value. Last logged on user.
     *  @param string|null $value Value to set for the lastLoggedOnUser property.
    */
    public function setLastLoggedOnUser(?string $value ): void {
        $this->lastLoggedOnUser = $value;
    }

    /**
     * Sets the lastSeenDateTime property value. Last seen date and time.
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value ): void {
        $this->lastSeenDateTime = $value;
    }

    /**
     * Sets the location property value. Location.
     *  @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the macAddress property value. MAC address.
     *  @param string|null $value Value to set for the macAddress property.
    */
    public function setMacAddress(?string $value ): void {
        $this->macAddress = $value;
    }

    /**
     * Sets the manufacturer property value. Manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. Model.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the os property value. Operating system.
     *  @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value ): void {
        $this->os = $value;
    }

    /**
     * Sets the osVersion property value. Operating system version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

}
