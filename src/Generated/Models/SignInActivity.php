<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignInActivity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $lastNonInteractiveSignInDateTime The last non-interactive sign-in date for a specific user. You can use this field to calculate the last time a client signed in to the directory on behalf of a user. Because some users may use clients to access tenant resources rather than signing into your tenant directly, you can use the non-interactive sign-in date to along with lastSignInDateTime to identify inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains non-interactive sign-ins going back to May 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
    */
    private ?DateTime $lastNonInteractiveSignInDateTime = null;
    
    /**
     * @var string|null $lastNonInteractiveSignInRequestId Request identifier of the last non-interactive sign-in performed by this user.
    */
    private ?string $lastNonInteractiveSignInRequestId = null;
    
    /**
     * @var DateTime|null $lastSignInDateTime The last interactive sign-in date and time for a specific user. You can use this field to calculate the last time a user signed in to the directory with an interactive authentication method. This field can be used to build reports, such as inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains interactive sign-ins going back to April 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
    */
    private ?DateTime $lastSignInDateTime = null;
    
    /**
     * @var string|null $lastSignInRequestId Request identifier of the last interactive sign-in performed by this user.
    */
    private ?string $lastSignInRequestId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new signInActivity and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.signInActivity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignInActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignInActivity {
        return new SignInActivity();
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
            'lastNonInteractiveSignInDateTime' => function (ParseNode $n) use ($o) { $o->setLastNonInteractiveSignInDateTime($n->getDateTimeValue()); },
            'lastNonInteractiveSignInRequestId' => function (ParseNode $n) use ($o) { $o->setLastNonInteractiveSignInRequestId($n->getStringValue()); },
            'lastSignInDateTime' => function (ParseNode $n) use ($o) { $o->setLastSignInDateTime($n->getDateTimeValue()); },
            'lastSignInRequestId' => function (ParseNode $n) use ($o) { $o->setLastSignInRequestId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the lastNonInteractiveSignInDateTime property value. The last non-interactive sign-in date for a specific user. You can use this field to calculate the last time a client signed in to the directory on behalf of a user. Because some users may use clients to access tenant resources rather than signing into your tenant directly, you can use the non-interactive sign-in date to along with lastSignInDateTime to identify inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains non-interactive sign-ins going back to May 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
     * @return DateTime|null
    */
    public function getLastNonInteractiveSignInDateTime(): ?DateTime {
        return $this->lastNonInteractiveSignInDateTime;
    }

    /**
     * Gets the lastNonInteractiveSignInRequestId property value. Request identifier of the last non-interactive sign-in performed by this user.
     * @return string|null
    */
    public function getLastNonInteractiveSignInRequestId(): ?string {
        return $this->lastNonInteractiveSignInRequestId;
    }

    /**
     * Gets the lastSignInDateTime property value. The last interactive sign-in date and time for a specific user. You can use this field to calculate the last time a user signed in to the directory with an interactive authentication method. This field can be used to build reports, such as inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains interactive sign-ins going back to April 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
     * @return DateTime|null
    */
    public function getLastSignInDateTime(): ?DateTime {
        return $this->lastSignInDateTime;
    }

    /**
     * Gets the lastSignInRequestId property value. Request identifier of the last interactive sign-in performed by this user.
     * @return string|null
    */
    public function getLastSignInRequestId(): ?string {
        return $this->lastSignInRequestId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastNonInteractiveSignInDateTime', $this->lastNonInteractiveSignInDateTime);
        $writer->writeStringValue('lastNonInteractiveSignInRequestId', $this->lastNonInteractiveSignInRequestId);
        $writer->writeDateTimeValue('lastSignInDateTime', $this->lastSignInDateTime);
        $writer->writeStringValue('lastSignInRequestId', $this->lastSignInRequestId);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the lastNonInteractiveSignInDateTime property value. The last non-interactive sign-in date for a specific user. You can use this field to calculate the last time a client signed in to the directory on behalf of a user. Because some users may use clients to access tenant resources rather than signing into your tenant directly, you can use the non-interactive sign-in date to along with lastSignInDateTime to identify inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains non-interactive sign-ins going back to May 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
     *  @param DateTime|null $value Value to set for the lastNonInteractiveSignInDateTime property.
    */
    public function setLastNonInteractiveSignInDateTime(?DateTime $value ): void {
        $this->lastNonInteractiveSignInDateTime = $value;
    }

    /**
     * Sets the lastNonInteractiveSignInRequestId property value. Request identifier of the last non-interactive sign-in performed by this user.
     *  @param string|null $value Value to set for the lastNonInteractiveSignInRequestId property.
    */
    public function setLastNonInteractiveSignInRequestId(?string $value ): void {
        $this->lastNonInteractiveSignInRequestId = $value;
    }

    /**
     * Sets the lastSignInDateTime property value. The last interactive sign-in date and time for a specific user. You can use this field to calculate the last time a user signed in to the directory with an interactive authentication method. This field can be used to build reports, such as inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains interactive sign-ins going back to April 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
     *  @param DateTime|null $value Value to set for the lastSignInDateTime property.
    */
    public function setLastSignInDateTime(?DateTime $value ): void {
        $this->lastSignInDateTime = $value;
    }

    /**
     * Sets the lastSignInRequestId property value. Request identifier of the last interactive sign-in performed by this user.
     *  @param string|null $value Value to set for the lastSignInRequestId property.
    */
    public function setLastSignInRequestId(?string $value ): void {
        $this->lastSignInRequestId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
