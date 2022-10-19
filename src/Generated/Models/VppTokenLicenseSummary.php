<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VppTokenLicenseSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appleId The Apple Id associated with the given Apple Volume Purchase Program Token.
    */
    private ?string $appleId = null;
    
    /**
     * @var int|null $availableLicenseCount The number of VPP licenses available.
    */
    private ?int $availableLicenseCount = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $organizationName The organization associated with the Apple Volume Purchase Program Token.
    */
    private ?string $organizationName = null;
    
    /**
     * @var int|null $usedLicenseCount The number of VPP licenses in use.
    */
    private ?int $usedLicenseCount = null;
    
    /**
     * @var string|null $vppTokenId Identifier of the VPP token.
    */
    private ?string $vppTokenId = null;
    
    /**
     * Instantiates a new vppTokenLicenseSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.vppTokenLicenseSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VppTokenLicenseSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VppTokenLicenseSummary {
        return new VppTokenLicenseSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appleId property value. The Apple Id associated with the given Apple Volume Purchase Program Token.
     * @return string|null
    */
    public function getAppleId(): ?string {
        return $this->appleId;
    }

    /**
     * Gets the availableLicenseCount property value. The number of VPP licenses available.
     * @return int|null
    */
    public function getAvailableLicenseCount(): ?int {
        return $this->availableLicenseCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appleId' => fn(ParseNode $n) => $o->setAppleId($n->getStringValue()),
            'availableLicenseCount' => fn(ParseNode $n) => $o->setAvailableLicenseCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organizationName' => fn(ParseNode $n) => $o->setOrganizationName($n->getStringValue()),
            'usedLicenseCount' => fn(ParseNode $n) => $o->setUsedLicenseCount($n->getIntegerValue()),
            'vppTokenId' => fn(ParseNode $n) => $o->setVppTokenId($n->getStringValue()),
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
     * Gets the organizationName property value. The organization associated with the Apple Volume Purchase Program Token.
     * @return string|null
    */
    public function getOrganizationName(): ?string {
        return $this->organizationName;
    }

    /**
     * Gets the usedLicenseCount property value. The number of VPP licenses in use.
     * @return int|null
    */
    public function getUsedLicenseCount(): ?int {
        return $this->usedLicenseCount;
    }

    /**
     * Gets the vppTokenId property value. Identifier of the VPP token.
     * @return string|null
    */
    public function getVppTokenId(): ?string {
        return $this->vppTokenId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appleId', $this->appleId);
        $writer->writeIntegerValue('availableLicenseCount', $this->availableLicenseCount);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('organizationName', $this->organizationName);
        $writer->writeIntegerValue('usedLicenseCount', $this->usedLicenseCount);
        $writer->writeStringValue('vppTokenId', $this->vppTokenId);
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
     * Sets the appleId property value. The Apple Id associated with the given Apple Volume Purchase Program Token.
     *  @param string|null $value Value to set for the appleId property.
    */
    public function setAppleId(?string $value ): void {
        $this->appleId = $value;
    }

    /**
     * Sets the availableLicenseCount property value. The number of VPP licenses available.
     *  @param int|null $value Value to set for the availableLicenseCount property.
    */
    public function setAvailableLicenseCount(?int $value ): void {
        $this->availableLicenseCount = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the organizationName property value. The organization associated with the Apple Volume Purchase Program Token.
     *  @param string|null $value Value to set for the organizationName property.
    */
    public function setOrganizationName(?string $value ): void {
        $this->organizationName = $value;
    }

    /**
     * Sets the usedLicenseCount property value. The number of VPP licenses in use.
     *  @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value ): void {
        $this->usedLicenseCount = $value;
    }

    /**
     * Sets the vppTokenId property value. Identifier of the VPP token.
     *  @param string|null $value Value to set for the vppTokenId property.
    */
    public function setVppTokenId(?string $value ): void {
        $this->vppTokenId = $value;
    }

}
