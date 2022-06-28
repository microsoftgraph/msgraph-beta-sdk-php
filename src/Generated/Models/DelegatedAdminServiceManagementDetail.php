<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminServiceManagementDetail extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $serviceManagementUrl The URL of the management portal for the managed service. Read-only.
    */
    private ?string $serviceManagementUrl = null;
    
    /**
     * @var string|null $serviceName The name of a managed service. Read-only.
    */
    private ?string $serviceName = null;
    
    /**
     * Instantiates a new delegatedAdminServiceManagementDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminServiceManagementDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminServiceManagementDetail {
        return new DelegatedAdminServiceManagementDetail();
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'serviceManagementUrl' => function (ParseNode $n) use ($o) { $o->setServiceManagementUrl($n->getStringValue()); },
            'serviceName' => function (ParseNode $n) use ($o) { $o->setServiceName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the serviceManagementUrl property value. The URL of the management portal for the managed service. Read-only.
     * @return string|null
    */
    public function getServiceManagementUrl(): ?string {
        return $this->serviceManagementUrl;
    }

    /**
     * Gets the serviceName property value. The name of a managed service. Read-only.
     * @return string|null
    */
    public function getServiceName(): ?string {
        return $this->serviceName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('serviceManagementUrl', $this->serviceManagementUrl);
        $writer->writeStringValue('serviceName', $this->serviceName);
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
     * Sets the serviceManagementUrl property value. The URL of the management portal for the managed service. Read-only.
     *  @param string|null $value Value to set for the serviceManagementUrl property.
    */
    public function setServiceManagementUrl(?string $value ): void {
        $this->serviceManagementUrl = $value;
    }

    /**
     * Sets the serviceName property value. The name of a managed service. Read-only.
     *  @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value ): void {
        $this->serviceName = $value;
    }

}
