<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppIdentity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appId Refers to the unique identifier representing Application Id in the Azure Active Directory.
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $displayName Refers to the Application Name displayed in the Azure Portal.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $servicePrincipalId Refers to the unique identifier indicating Service Principal Id in Azure Active Directory for the corresponding App.
    */
    private ?string $servicePrincipalId = null;
    
    /**
     * @var string|null $servicePrincipalName Refers to the Service Principal Name is the Application name in the tenant.
    */
    private ?string $servicePrincipalName = null;
    
    /**
     * Instantiates a new appIdentity and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.appIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppIdentity {
        return new AppIdentity();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appId property value. Refers to the unique identifier representing Application Id in the Azure Active Directory.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the displayName property value. Refers to the Application Name displayed in the Azure Portal.
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
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'servicePrincipalId' => function (ParseNode $n) use ($o) { $o->setServicePrincipalId($n->getStringValue()); },
            'servicePrincipalName' => function (ParseNode $n) use ($o) { $o->setServicePrincipalName($n->getStringValue()); },
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
     * Gets the servicePrincipalId property value. Refers to the unique identifier indicating Service Principal Id in Azure Active Directory for the corresponding App.
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        return $this->servicePrincipalId;
    }

    /**
     * Gets the servicePrincipalName property value. Refers to the Service Principal Name is the Application name in the tenant.
     * @return string|null
    */
    public function getServicePrincipalName(): ?string {
        return $this->servicePrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('servicePrincipalId', $this->servicePrincipalId);
        $writer->writeStringValue('servicePrincipalName', $this->servicePrincipalName);
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
     * Sets the appId property value. Refers to the unique identifier representing Application Id in the Azure Active Directory.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the displayName property value. Refers to the Application Name displayed in the Azure Portal.
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
     * Sets the servicePrincipalId property value. Refers to the unique identifier indicating Service Principal Id in Azure Active Directory for the corresponding App.
     *  @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value ): void {
        $this->servicePrincipalId = $value;
    }

    /**
     * Sets the servicePrincipalName property value. Refers to the Service Principal Name is the Application name in the tenant.
     *  @param string|null $value Value to set for the servicePrincipalName property.
    */
    public function setServicePrincipalName(?string $value ): void {
        $this->servicePrincipalName = $value;
    }

}
