<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationAppPolicyDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AuthenticationAppAdminConfiguration|null $adminConfiguration The adminConfiguration property
    */
    private ?AuthenticationAppAdminConfiguration $adminConfiguration = null;
    
    /**
     * @var AuthenticationAppEvaluation|null $authenticationEvaluation The authenticationEvaluation property
    */
    private ?AuthenticationAppEvaluation $authenticationEvaluation = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $policyName The policyName property
    */
    private ?string $policyName = null;
    
    /**
     * @var AuthenticationAppPolicyStatus|null $status The status property
    */
    private ?AuthenticationAppPolicyStatus $status = null;
    
    /**
     * Instantiates a new authenticationAppPolicyDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.authenticationAppPolicyDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationAppPolicyDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationAppPolicyDetails {
        return new AuthenticationAppPolicyDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the adminConfiguration property value. The adminConfiguration property
     * @return AuthenticationAppAdminConfiguration|null
    */
    public function getAdminConfiguration(): ?AuthenticationAppAdminConfiguration {
        return $this->adminConfiguration;
    }

    /**
     * Gets the authenticationEvaluation property value. The authenticationEvaluation property
     * @return AuthenticationAppEvaluation|null
    */
    public function getAuthenticationEvaluation(): ?AuthenticationAppEvaluation {
        return $this->authenticationEvaluation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminConfiguration' => fn(ParseNode $n) => $o->setAdminConfiguration($n->getEnumValue(AuthenticationAppAdminConfiguration::class)),
            'authenticationEvaluation' => fn(ParseNode $n) => $o->setAuthenticationEvaluation($n->getEnumValue(AuthenticationAppEvaluation::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AuthenticationAppPolicyStatus::class)),
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
     * Gets the policyName property value. The policyName property
     * @return string|null
    */
    public function getPolicyName(): ?string {
        return $this->policyName;
    }

    /**
     * Gets the status property value. The status property
     * @return AuthenticationAppPolicyStatus|null
    */
    public function getStatus(): ?AuthenticationAppPolicyStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('adminConfiguration', $this->adminConfiguration);
        $writer->writeEnumValue('authenticationEvaluation', $this->authenticationEvaluation);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('policyName', $this->policyName);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the adminConfiguration property value. The adminConfiguration property
     *  @param AuthenticationAppAdminConfiguration|null $value Value to set for the adminConfiguration property.
    */
    public function setAdminConfiguration(?AuthenticationAppAdminConfiguration $value ): void {
        $this->adminConfiguration = $value;
    }

    /**
     * Sets the authenticationEvaluation property value. The authenticationEvaluation property
     *  @param AuthenticationAppEvaluation|null $value Value to set for the authenticationEvaluation property.
    */
    public function setAuthenticationEvaluation(?AuthenticationAppEvaluation $value ): void {
        $this->authenticationEvaluation = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the policyName property value. The policyName property
     *  @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value ): void {
        $this->policyName = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param AuthenticationAppPolicyStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AuthenticationAppPolicyStatus $value ): void {
        $this->status = $value;
    }

}
