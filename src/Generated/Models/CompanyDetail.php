<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CompanyDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PhysicalAddress|null $address Address of the company.
    */
    private ?PhysicalAddress $address = null;
    
    /**
     * @var string|null $department Department Name within a company.
    */
    private ?string $department = null;
    
    /**
     * @var string|null $displayName Company name.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $officeLocation Office Location of the person referred to.
    */
    private ?string $officeLocation = null;
    
    /**
     * @var string|null $pronunciation Pronunciation guide for the company name.
    */
    private ?string $pronunciation = null;
    
    /**
     * @var string|null $webUrl Link to the company home page.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new companyDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.companyDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompanyDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompanyDetail {
        return new CompanyDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. Address of the company.
     * @return PhysicalAddress|null
    */
    public function getAddress(): ?PhysicalAddress {
        return $this->address;
    }

    /**
     * Gets the department property value. Department Name within a company.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->department;
    }

    /**
     * Gets the displayName property value. Company name.
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
            'address' => function (ParseNode $n) use ($o) { $o->setAddress($n->getObjectValue(array(PhysicalAddress::class, 'createFromDiscriminatorValue'))); },
            'department' => function (ParseNode $n) use ($o) { $o->setDepartment($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'officeLocation' => function (ParseNode $n) use ($o) { $o->setOfficeLocation($n->getStringValue()); },
            'pronunciation' => function (ParseNode $n) use ($o) { $o->setPronunciation($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
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
     * Gets the officeLocation property value. Office Location of the person referred to.
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->officeLocation;
    }

    /**
     * Gets the pronunciation property value. Pronunciation guide for the company name.
     * @return string|null
    */
    public function getPronunciation(): ?string {
        return $this->pronunciation;
    }

    /**
     * Gets the webUrl property value. Link to the company home page.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->address);
        $writer->writeStringValue('department', $this->department);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('officeLocation', $this->officeLocation);
        $writer->writeStringValue('pronunciation', $this->pronunciation);
        $writer->writeStringValue('webUrl', $this->webUrl);
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
     * Sets the address property value. Address of the company.
     *  @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the department property value. Department Name within a company.
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value ): void {
        $this->department = $value;
    }

    /**
     * Sets the displayName property value. Company name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the officeLocation property value. Office Location of the person referred to.
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value ): void {
        $this->officeLocation = $value;
    }

    /**
     * Sets the pronunciation property value. Pronunciation guide for the company name.
     *  @param string|null $value Value to set for the pronunciation property.
    */
    public function setPronunciation(?string $value ): void {
        $this->pronunciation = $value;
    }

    /**
     * Sets the webUrl property value. Link to the company home page.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
