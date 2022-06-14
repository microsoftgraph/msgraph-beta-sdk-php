<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\CompleteSetup;

use Microsoft\Graph\Beta\Generated\Models\TenantSetupInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CompleteSetupPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TenantSetupInfo|null $tenantSetupInfo The tenantSetupInfo property
    */
    private ?TenantSetupInfo $tenantSetupInfo = null;
    
    /**
     * Instantiates a new completeSetupPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompleteSetupPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompleteSetupPostRequestBody {
        return new CompleteSetupPostRequestBody();
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
        return  [
            'tenantSetupInfo' => function (ParseNode $n) use ($o) { $o->setTenantSetupInfo($n->getObjectValue(array(TenantSetupInfo::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the tenantSetupInfo property value. The tenantSetupInfo property
     * @return TenantSetupInfo|null
    */
    public function getTenantSetupInfo(): ?TenantSetupInfo {
        return $this->tenantSetupInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('tenantSetupInfo', $this->tenantSetupInfo);
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
     * Sets the tenantSetupInfo property value. The tenantSetupInfo property
     *  @param TenantSetupInfo|null $value Value to set for the tenantSetupInfo property.
    */
    public function setTenantSetupInfo(?TenantSetupInfo $value ): void {
        $this->tenantSetupInfo = $value;
    }

}
