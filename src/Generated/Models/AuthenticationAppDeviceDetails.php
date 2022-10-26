<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationAppDeviceDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appVersion The appVersion property
    */
    private ?string $appVersion = null;
    
    /**
     * @var string|null $clientApp The clientApp property
    */
    private ?string $clientApp = null;
    
    /**
     * @var string|null $deviceId The deviceId property
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $operatingSystem The operatingSystem property
    */
    private ?string $operatingSystem = null;
    
    /**
     * Instantiates a new authenticationAppDeviceDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.authenticationAppDeviceDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationAppDeviceDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationAppDeviceDetails {
        return new AuthenticationAppDeviceDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appVersion property value. The appVersion property
     * @return string|null
    */
    public function getAppVersion(): ?string {
        return $this->appVersion;
    }

    /**
     * Gets the clientApp property value. The clientApp property
     * @return string|null
    */
    public function getClientApp(): ?string {
        return $this->clientApp;
    }

    /**
     * Gets the deviceId property value. The deviceId property
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appVersion' => fn(ParseNode $n) => $o->setAppVersion($n->getStringValue()),
            'clientApp' => fn(ParseNode $n) => $o->setClientApp($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the operatingSystem property value. The operatingSystem property
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->operatingSystem;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appVersion', $this->appVersion);
        $writer->writeStringValue('clientApp', $this->clientApp);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('operatingSystem', $this->operatingSystem);
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
     * Sets the appVersion property value. The appVersion property
     *  @param string|null $value Value to set for the appVersion property.
    */
    public function setAppVersion(?string $value ): void {
        $this->appVersion = $value;
    }

    /**
     * Sets the clientApp property value. The clientApp property
     *  @param string|null $value Value to set for the clientApp property.
    */
    public function setClientApp(?string $value ): void {
        $this->clientApp = $value;
    }

    /**
     * Sets the deviceId property value. The deviceId property
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the operatingSystem property value. The operatingSystem property
     *  @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value ): void {
        $this->operatingSystem = $value;
    }

}
