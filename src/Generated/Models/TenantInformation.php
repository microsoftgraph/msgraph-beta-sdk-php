<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $defaultDomainName Primary domain name of an Azure AD tenant.
    */
    private ?string $defaultDomainName = null;
    
    /**
     * @var string|null $displayName Display name of an Azure AD tenant.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $federationBrandName Name shown to users that sign in to an Azure AD tenant.
    */
    private ?string $federationBrandName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $tenantId Unique identifier of an Azure AD tenant.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new tenantInformation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.tenantInformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantInformation {
        return new TenantInformation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultDomainName property value. Primary domain name of an Azure AD tenant.
     * @return string|null
    */
    public function getDefaultDomainName(): ?string {
        return $this->defaultDomainName;
    }

    /**
     * Gets the displayName property value. Display name of an Azure AD tenant.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the federationBrandName property value. Name shown to users that sign in to an Azure AD tenant.
     * @return string|null
    */
    public function getFederationBrandName(): ?string {
        return $this->federationBrandName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultDomainName' => function (ParseNode $n) use ($o) { $o->setDefaultDomainName($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'federationBrandName' => function (ParseNode $n) use ($o) { $o->setFederationBrandName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
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
     * Gets the tenantId property value. Unique identifier of an Azure AD tenant.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultDomainName', $this->defaultDomainName);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('federationBrandName', $this->federationBrandName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('tenantId', $this->tenantId);
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
     * Sets the defaultDomainName property value. Primary domain name of an Azure AD tenant.
     *  @param string|null $value Value to set for the defaultDomainName property.
    */
    public function setDefaultDomainName(?string $value ): void {
        $this->defaultDomainName = $value;
    }

    /**
     * Sets the displayName property value. Display name of an Azure AD tenant.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the federationBrandName property value. Name shown to users that sign in to an Azure AD tenant.
     *  @param string|null $value Value to set for the federationBrandName property.
    */
    public function setFederationBrandName(?string $value ): void {
        $this->federationBrandName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the tenantId property value. Unique identifier of an Azure AD tenant.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
