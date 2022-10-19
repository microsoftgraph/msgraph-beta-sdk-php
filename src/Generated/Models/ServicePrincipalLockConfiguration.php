<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServicePrincipalLockConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allProperties The allProperties property
    */
    private ?bool $allProperties = null;
    
    /**
     * @var bool|null $credentialsWithUsageSign The credentialsWithUsageSign property
    */
    private ?bool $credentialsWithUsageSign = null;
    
    /**
     * @var bool|null $credentialsWithUsageVerify The credentialsWithUsageVerify property
    */
    private ?bool $credentialsWithUsageVerify = null;
    
    /**
     * @var bool|null $isEnabled The isEnabled property
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $tokenEncryptionKeyId The tokenEncryptionKeyId property
    */
    private ?bool $tokenEncryptionKeyId = null;
    
    /**
     * Instantiates a new servicePrincipalLockConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.servicePrincipalLockConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalLockConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalLockConfiguration {
        return new ServicePrincipalLockConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allProperties property value. The allProperties property
     * @return bool|null
    */
    public function getAllProperties(): ?bool {
        return $this->allProperties;
    }

    /**
     * Gets the credentialsWithUsageSign property value. The credentialsWithUsageSign property
     * @return bool|null
    */
    public function getCredentialsWithUsageSign(): ?bool {
        return $this->credentialsWithUsageSign;
    }

    /**
     * Gets the credentialsWithUsageVerify property value. The credentialsWithUsageVerify property
     * @return bool|null
    */
    public function getCredentialsWithUsageVerify(): ?bool {
        return $this->credentialsWithUsageVerify;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allProperties' => fn(ParseNode $n) => $o->setAllProperties($n->getBooleanValue()),
            'credentialsWithUsageSign' => fn(ParseNode $n) => $o->setCredentialsWithUsageSign($n->getBooleanValue()),
            'credentialsWithUsageVerify' => fn(ParseNode $n) => $o->setCredentialsWithUsageVerify($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tokenEncryptionKeyId' => fn(ParseNode $n) => $o->setTokenEncryptionKeyId($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the isEnabled property value. The isEnabled property
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the tokenEncryptionKeyId property value. The tokenEncryptionKeyId property
     * @return bool|null
    */
    public function getTokenEncryptionKeyId(): ?bool {
        return $this->tokenEncryptionKeyId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allProperties', $this->allProperties);
        $writer->writeBooleanValue('credentialsWithUsageSign', $this->credentialsWithUsageSign);
        $writer->writeBooleanValue('credentialsWithUsageVerify', $this->credentialsWithUsageVerify);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('tokenEncryptionKeyId', $this->tokenEncryptionKeyId);
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
     * Sets the allProperties property value. The allProperties property
     *  @param bool|null $value Value to set for the allProperties property.
    */
    public function setAllProperties(?bool $value ): void {
        $this->allProperties = $value;
    }

    /**
     * Sets the credentialsWithUsageSign property value. The credentialsWithUsageSign property
     *  @param bool|null $value Value to set for the credentialsWithUsageSign property.
    */
    public function setCredentialsWithUsageSign(?bool $value ): void {
        $this->credentialsWithUsageSign = $value;
    }

    /**
     * Sets the credentialsWithUsageVerify property value. The credentialsWithUsageVerify property
     *  @param bool|null $value Value to set for the credentialsWithUsageVerify property.
    */
    public function setCredentialsWithUsageVerify(?bool $value ): void {
        $this->credentialsWithUsageVerify = $value;
    }

    /**
     * Sets the isEnabled property value. The isEnabled property
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the tokenEncryptionKeyId property value. The tokenEncryptionKeyId property
     *  @param bool|null $value Value to set for the tokenEncryptionKeyId property.
    */
    public function setTokenEncryptionKeyId(?bool $value ): void {
        $this->tokenEncryptionKeyId = $value;
    }

}
