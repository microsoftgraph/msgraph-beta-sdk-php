<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPackageInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WindowsArchitecture|null $applicableArchitecture Contains properties for Windows architecture.
    */
    private ?WindowsArchitecture $applicableArchitecture = null;
    
    /**
     * @var string|null $displayName The Display Name.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $identityName The Identity Name.
    */
    private ?string $identityName = null;
    
    /**
     * @var string|null $identityPublisher The Identity Publisher.
    */
    private ?string $identityPublisher = null;
    
    /**
     * @var string|null $identityResourceIdentifier The Identity Resource Identifier.
    */
    private ?string $identityResourceIdentifier = null;
    
    /**
     * @var string|null $identityVersion The Identity Version.
    */
    private ?string $identityVersion = null;
    
    /**
     * @var WindowsMinimumOperatingSystem|null $minimumSupportedOperatingSystem The value for the minimum applicable operating system.
    */
    private ?WindowsMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new windowsPackageInformation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windowsPackageInformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPackageInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPackageInformation {
        return new WindowsPackageInformation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicableArchitecture property value. Contains properties for Windows architecture.
     * @return WindowsArchitecture|null
    */
    public function getApplicableArchitecture(): ?WindowsArchitecture {
        return $this->applicableArchitecture;
    }

    /**
     * Gets the displayName property value. The Display Name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicableArchitecture' => function (ParseNode $n) use ($o) { $o->setApplicableArchitecture($n->getEnumValue(WindowsArchitecture::class)); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'identityName' => function (ParseNode $n) use ($o) { $o->setIdentityName($n->getStringValue()); },
            'identityPublisher' => function (ParseNode $n) use ($o) { $o->setIdentityPublisher($n->getStringValue()); },
            'identityResourceIdentifier' => function (ParseNode $n) use ($o) { $o->setIdentityResourceIdentifier($n->getStringValue()); },
            'identityVersion' => function (ParseNode $n) use ($o) { $o->setIdentityVersion($n->getStringValue()); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(WindowsMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the identityName property value. The Identity Name.
     * @return string|null
    */
    public function getIdentityName(): ?string {
        return $this->identityName;
    }

    /**
     * Gets the identityPublisher property value. The Identity Publisher.
     * @return string|null
    */
    public function getIdentityPublisher(): ?string {
        return $this->identityPublisher;
    }

    /**
     * Gets the identityResourceIdentifier property value. The Identity Resource Identifier.
     * @return string|null
    */
    public function getIdentityResourceIdentifier(): ?string {
        return $this->identityResourceIdentifier;
    }

    /**
     * Gets the identityVersion property value. The Identity Version.
     * @return string|null
    */
    public function getIdentityVersion(): ?string {
        return $this->identityVersion;
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return WindowsMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?WindowsMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('applicableArchitecture', $this->applicableArchitecture);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('identityName', $this->identityName);
        $writer->writeStringValue('identityPublisher', $this->identityPublisher);
        $writer->writeStringValue('identityResourceIdentifier', $this->identityResourceIdentifier);
        $writer->writeStringValue('identityVersion', $this->identityVersion);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the applicableArchitecture property value. Contains properties for Windows architecture.
     *  @param WindowsArchitecture|null $value Value to set for the applicableArchitecture property.
    */
    public function setApplicableArchitecture(?WindowsArchitecture $value ): void {
        $this->applicableArchitecture = $value;
    }

    /**
     * Sets the displayName property value. The Display Name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the identityName property value. The Identity Name.
     *  @param string|null $value Value to set for the identityName property.
    */
    public function setIdentityName(?string $value ): void {
        $this->identityName = $value;
    }

    /**
     * Sets the identityPublisher property value. The Identity Publisher.
     *  @param string|null $value Value to set for the identityPublisher property.
    */
    public function setIdentityPublisher(?string $value ): void {
        $this->identityPublisher = $value;
    }

    /**
     * Sets the identityResourceIdentifier property value. The Identity Resource Identifier.
     *  @param string|null $value Value to set for the identityResourceIdentifier property.
    */
    public function setIdentityResourceIdentifier(?string $value ): void {
        $this->identityResourceIdentifier = $value;
    }

    /**
     * Sets the identityVersion property value. The Identity Version.
     *  @param string|null $value Value to set for the identityVersion property.
    */
    public function setIdentityVersion(?string $value ): void {
        $this->identityVersion = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     *  @param WindowsMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?WindowsMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
