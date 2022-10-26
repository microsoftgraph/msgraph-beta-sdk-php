<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PowerliftIncidentMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $application The name of the application the diagnostic is from. Example: com.microsoft.CompanyPortal
    */
    private ?string $application = null;
    
    /**
     * @var string|null $clientVersion The version of the application. Example: 5.2203.1
    */
    private ?string $clientVersion = null;
    
    /**
     * @var DateTime|null $createdAtDateTime The time the app diagnostic was created. Example: 2022-04-19T17:24:45.313Z
    */
    private ?DateTime $createdAtDateTime = null;
    
    /**
     * @var string|null $easyId The unique app diagnostic identifier as a user friendly 8 character hexadecimal string. Example: 8520467A
    */
    private ?string $easyId = null;
    
    /**
     * @var array<string>|null $fileNames A list of files that are associated with the diagnostic.
    */
    private ?array $fileNames = null;
    
    /**
     * @var string|null $locale The locale information of the application. Example: en-US
    */
    private ?string $locale = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $platform The device's OS the diagnostic is from. Example: iOS
    */
    private ?string $platform = null;
    
    /**
     * @var string|null $powerliftId The unique identifier of the app diagnostic. Example: 8520467a-49a9-44a4-8447-8dfb8bec6726
    */
    private ?string $powerliftId = null;
    
    /**
     * Instantiates a new powerliftIncidentMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.powerliftIncidentMetadata');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PowerliftIncidentMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PowerliftIncidentMetadata {
        return new PowerliftIncidentMetadata();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the application property value. The name of the application the diagnostic is from. Example: com.microsoft.CompanyPortal
     * @return string|null
    */
    public function getApplication(): ?string {
        return $this->application;
    }

    /**
     * Gets the clientVersion property value. The version of the application. Example: 5.2203.1
     * @return string|null
    */
    public function getClientVersion(): ?string {
        return $this->clientVersion;
    }

    /**
     * Gets the createdAtDateTime property value. The time the app diagnostic was created. Example: 2022-04-19T17:24:45.313Z
     * @return DateTime|null
    */
    public function getCreatedAtDateTime(): ?DateTime {
        return $this->createdAtDateTime;
    }

    /**
     * Gets the easyId property value. The unique app diagnostic identifier as a user friendly 8 character hexadecimal string. Example: 8520467A
     * @return string|null
    */
    public function getEasyId(): ?string {
        return $this->easyId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'application' => fn(ParseNode $n) => $o->setApplication($n->getStringValue()),
            'clientVersion' => fn(ParseNode $n) => $o->setClientVersion($n->getStringValue()),
            'createdAtDateTime' => fn(ParseNode $n) => $o->setCreatedAtDateTime($n->getDateTimeValue()),
            'easyId' => fn(ParseNode $n) => $o->setEasyId($n->getStringValue()),
            'fileNames' => fn(ParseNode $n) => $o->setFileNames($n->getCollectionOfPrimitiveValues()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getStringValue()),
            'powerliftId' => fn(ParseNode $n) => $o->setPowerliftId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileNames property value. A list of files that are associated with the diagnostic.
     * @return array<string>|null
    */
    public function getFileNames(): ?array {
        return $this->fileNames;
    }

    /**
     * Gets the locale property value. The locale information of the application. Example: en-US
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the platform property value. The device's OS the diagnostic is from. Example: iOS
     * @return string|null
    */
    public function getPlatform(): ?string {
        return $this->platform;
    }

    /**
     * Gets the powerliftId property value. The unique identifier of the app diagnostic. Example: 8520467a-49a9-44a4-8447-8dfb8bec6726
     * @return string|null
    */
    public function getPowerliftId(): ?string {
        return $this->powerliftId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('application', $this->application);
        $writer->writeStringValue('clientVersion', $this->clientVersion);
        $writer->writeDateTimeValue('createdAtDateTime', $this->createdAtDateTime);
        $writer->writeStringValue('easyId', $this->easyId);
        $writer->writeCollectionOfPrimitiveValues('fileNames', $this->fileNames);
        $writer->writeStringValue('locale', $this->locale);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('platform', $this->platform);
        $writer->writeStringValue('powerliftId', $this->powerliftId);
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
     * Sets the application property value. The name of the application the diagnostic is from. Example: com.microsoft.CompanyPortal
     *  @param string|null $value Value to set for the application property.
    */
    public function setApplication(?string $value ): void {
        $this->application = $value;
    }

    /**
     * Sets the clientVersion property value. The version of the application. Example: 5.2203.1
     *  @param string|null $value Value to set for the clientVersion property.
    */
    public function setClientVersion(?string $value ): void {
        $this->clientVersion = $value;
    }

    /**
     * Sets the createdAtDateTime property value. The time the app diagnostic was created. Example: 2022-04-19T17:24:45.313Z
     *  @param DateTime|null $value Value to set for the createdAtDateTime property.
    */
    public function setCreatedAtDateTime(?DateTime $value ): void {
        $this->createdAtDateTime = $value;
    }

    /**
     * Sets the easyId property value. The unique app diagnostic identifier as a user friendly 8 character hexadecimal string. Example: 8520467A
     *  @param string|null $value Value to set for the easyId property.
    */
    public function setEasyId(?string $value ): void {
        $this->easyId = $value;
    }

    /**
     * Sets the fileNames property value. A list of files that are associated with the diagnostic.
     *  @param array<string>|null $value Value to set for the fileNames property.
    */
    public function setFileNames(?array $value ): void {
        $this->fileNames = $value;
    }

    /**
     * Sets the locale property value. The locale information of the application. Example: en-US
     *  @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value ): void {
        $this->locale = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the platform property value. The device's OS the diagnostic is from. Example: iOS
     *  @param string|null $value Value to set for the platform property.
    */
    public function setPlatform(?string $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the powerliftId property value. The unique identifier of the app diagnostic. Example: 8520467a-49a9-44a4-8447-8dfb8bec6726
     *  @param string|null $value Value to set for the powerliftId property.
    */
    public function setPowerliftId(?string $value ): void {
        $this->powerliftId = $value;
    }

}
