<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class KerberosSignOnSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $kerberosServicePrincipalName The Internal Application SPN of the application server. This SPN needs to be in the list of services to which the connector can present delegated credentials. */
    private ?string $kerberosServicePrincipalName = null;
    
    /** @var KerberosSignOnMappingAttributeType|null $kerberosSignOnMappingAttributeType The Delegated Login Identity for the connector to use on behalf of your users. For more information, see Working with different on-premises and cloud identities . Possible values are: userPrincipalName, onPremisesUserPrincipalName, userPrincipalUsername, onPremisesUserPrincipalUsername, onPremisesSAMAccountName. */
    private ?KerberosSignOnMappingAttributeType $kerberosSignOnMappingAttributeType = null;
    
    /**
     * Instantiates a new kerberosSignOnSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KerberosSignOnSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): KerberosSignOnSettings {
        return new KerberosSignOnSettings();
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
            'kerberosServicePrincipalName' => function (self $o, ParseNode $n) { $o->setKerberosServicePrincipalName($n->getStringValue()); },
            'kerberosSignOnMappingAttributeType' => function (self $o, ParseNode $n) { $o->setKerberosSignOnMappingAttributeType($n->getEnumValue(KerberosSignOnMappingAttributeType::class)); },
        ];
    }

    /**
     * Gets the kerberosServicePrincipalName property value. The Internal Application SPN of the application server. This SPN needs to be in the list of services to which the connector can present delegated credentials.
     * @return string|null
    */
    public function getKerberosServicePrincipalName(): ?string {
        return $this->kerberosServicePrincipalName;
    }

    /**
     * Gets the kerberosSignOnMappingAttributeType property value. The Delegated Login Identity for the connector to use on behalf of your users. For more information, see Working with different on-premises and cloud identities . Possible values are: userPrincipalName, onPremisesUserPrincipalName, userPrincipalUsername, onPremisesUserPrincipalUsername, onPremisesSAMAccountName.
     * @return KerberosSignOnMappingAttributeType|null
    */
    public function getKerberosSignOnMappingAttributeType(): ?KerberosSignOnMappingAttributeType {
        return $this->kerberosSignOnMappingAttributeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('kerberosServicePrincipalName', $this->kerberosServicePrincipalName);
        $writer->writeEnumValue('kerberosSignOnMappingAttributeType', $this->kerberosSignOnMappingAttributeType);
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
     * Sets the kerberosServicePrincipalName property value. The Internal Application SPN of the application server. This SPN needs to be in the list of services to which the connector can present delegated credentials.
     *  @param string|null $value Value to set for the kerberosServicePrincipalName property.
    */
    public function setKerberosServicePrincipalName(?string $value ): void {
        $this->kerberosServicePrincipalName = $value;
    }

    /**
     * Sets the kerberosSignOnMappingAttributeType property value. The Delegated Login Identity for the connector to use on behalf of your users. For more information, see Working with different on-premises and cloud identities . Possible values are: userPrincipalName, onPremisesUserPrincipalName, userPrincipalUsername, onPremisesUserPrincipalUsername, onPremisesSAMAccountName.
     *  @param KerberosSignOnMappingAttributeType|null $value Value to set for the kerberosSignOnMappingAttributeType property.
    */
    public function setKerberosSignOnMappingAttributeType(?KerberosSignOnMappingAttributeType $value ): void {
        $this->kerberosSignOnMappingAttributeType = $value;
    }

}
