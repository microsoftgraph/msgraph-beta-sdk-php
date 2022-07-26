<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserRegistrationFeatureCount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AuthenticationMethodFeature|null $feature The feature property
    */
    private ?AuthenticationMethodFeature $feature = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $userCount Number of users.
    */
    private ?int $userCount = null;
    
    /**
     * Instantiates a new userRegistrationFeatureCount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userRegistrationFeatureCount');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationFeatureCount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationFeatureCount {
        return new UserRegistrationFeatureCount();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the feature property value. The feature property
     * @return AuthenticationMethodFeature|null
    */
    public function getFeature(): ?AuthenticationMethodFeature {
        return $this->feature;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feature' => function (ParseNode $n) use ($o) { $o->setFeature($n->getEnumValue(AuthenticationMethodFeature::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'userCount' => function (ParseNode $n) use ($o) { $o->setUserCount($n->getIntegerValue()); },
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
     * Gets the userCount property value. Number of users.
     * @return int|null
    */
    public function getUserCount(): ?int {
        return $this->userCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('feature', $this->feature);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('userCount', $this->userCount);
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
     * Sets the feature property value. The feature property
     *  @param AuthenticationMethodFeature|null $value Value to set for the feature property.
    */
    public function setFeature(?AuthenticationMethodFeature $value ): void {
        $this->feature = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the userCount property value. Number of users.
     *  @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value ): void {
        $this->userCount = $value;
    }

}
