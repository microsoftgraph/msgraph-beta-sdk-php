<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivateLinkDetails implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $policyId The unique identifier for the Private Link policy. */
    private ?string $policyId = null;
    
    /** @var string|null $policyName The name of the Private Link policy in Azure AD. */
    private ?string $policyName = null;
    
    /** @var string|null $policyTenantId The tenant identifier of the Azure AD tenant the Private Link policy belongs to. */
    private ?string $policyTenantId = null;
    
    /** @var string|null $resourceId The Azure Resource Manager (ARM) path for the Private Link policy resource. */
    private ?string $resourceId = null;
    
    /**
     * Instantiates a new privateLinkDetails and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivateLinkDetails
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrivateLinkDetails {
        return new PrivateLinkDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'policyId' => function (self $o, ParseNode $n) { $o->setPolicyId($n->getStringValue()); },
            'policyName' => function (self $o, ParseNode $n) { $o->setPolicyName($n->getStringValue()); },
            'policyTenantId' => function (self $o, ParseNode $n) { $o->setPolicyTenantId($n->getStringValue()); },
            'resourceId' => function (self $o, ParseNode $n) { $o->setResourceId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the policyId property value. The unique identifier for the Private Link policy.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->policyId;
    }

    /**
     * Gets the policyName property value. The name of the Private Link policy in Azure AD.
     * @return string|null
    */
    public function getPolicyName(): ?string {
        return $this->policyName;
    }

    /**
     * Gets the policyTenantId property value. The tenant identifier of the Azure AD tenant the Private Link policy belongs to.
     * @return string|null
    */
    public function getPolicyTenantId(): ?string {
        return $this->policyTenantId;
    }

    /**
     * Gets the resourceId property value. The Azure Resource Manager (ARM) path for the Private Link policy resource.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('policyId', $this->policyId);
        $writer->writeStringValue('policyName', $this->policyName);
        $writer->writeStringValue('policyTenantId', $this->policyTenantId);
        $writer->writeStringValue('resourceId', $this->resourceId);
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
     * Sets the policyId property value. The unique identifier for the Private Link policy.
     *  @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value ): void {
        $this->policyId = $value;
    }

    /**
     * Sets the policyName property value. The name of the Private Link policy in Azure AD.
     *  @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value ): void {
        $this->policyName = $value;
    }

    /**
     * Sets the policyTenantId property value. The tenant identifier of the Azure AD tenant the Private Link policy belongs to.
     *  @param string|null $value Value to set for the policyTenantId property.
    */
    public function setPolicyTenantId(?string $value ): void {
        $this->policyTenantId = $value;
    }

    /**
     * Sets the resourceId property value. The Azure Resource Manager (ARM) path for the Private Link policy resource.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

}
