<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VmMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var VmCloudProvider|null $cloudProvider The cloudProvider property
    */
    private ?VmCloudProvider $cloudProvider = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $resourceId Unique identifier of the Azure resource.
    */
    private ?string $resourceId = null;
    
    /**
     * @var string|null $subscriptionId Unique identifier of the Azure subscription the customer tenant belongs to.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var string|null $vmId Unique identifier of the virtual machine instance.
    */
    private ?string $vmId = null;
    
    /**
     * Instantiates a new vmMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.vmMetadata');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VmMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VmMetadata {
        return new VmMetadata();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cloudProvider property value. The cloudProvider property
     * @return VmCloudProvider|null
    */
    public function getCloudProvider(): ?VmCloudProvider {
        return $this->cloudProvider;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cloudProvider' => function (ParseNode $n) use ($o) { $o->setCloudProvider($n->getEnumValue(VmCloudProvider::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'resourceId' => function (ParseNode $n) use ($o) { $o->setResourceId($n->getStringValue()); },
            'subscriptionId' => function (ParseNode $n) use ($o) { $o->setSubscriptionId($n->getStringValue()); },
            'vmId' => function (ParseNode $n) use ($o) { $o->setVmId($n->getStringValue()); },
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
     * Gets the resourceId property value. Unique identifier of the Azure resource.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the subscriptionId property value. Unique identifier of the Azure subscription the customer tenant belongs to.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the vmId property value. Unique identifier of the virtual machine instance.
     * @return string|null
    */
    public function getVmId(): ?string {
        return $this->vmId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('cloudProvider', $this->cloudProvider);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeStringValue('subscriptionId', $this->subscriptionId);
        $writer->writeStringValue('vmId', $this->vmId);
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
     * Sets the cloudProvider property value. The cloudProvider property
     *  @param VmCloudProvider|null $value Value to set for the cloudProvider property.
    */
    public function setCloudProvider(?VmCloudProvider $value ): void {
        $this->cloudProvider = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the resourceId property value. Unique identifier of the Azure resource.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the subscriptionId property value. Unique identifier of the Azure subscription the customer tenant belongs to.
     *  @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value ): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the vmId property value. Unique identifier of the virtual machine instance.
     *  @param string|null $value Value to set for the vmId property.
    */
    public function setVmId(?string $value ): void {
        $this->vmId = $value;
    }

}
