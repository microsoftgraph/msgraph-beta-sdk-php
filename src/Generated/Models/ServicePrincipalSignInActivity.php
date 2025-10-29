<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServicePrincipalSignInActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new ServicePrincipalSignInActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalSignInActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalSignInActivity {
        return new ServicePrincipalSignInActivity();
    }

    /**
     * Gets the appId property value. The globally unique appId (also called client ID on the Microsoft Entra admin center) of the credentialed resource application.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the applicationAuthenticationClientSignInActivity property value. The sign-in activity of the application in a app-only authentication flow (app-to-app tokens) where the application acts like a client.
     * @return SignInActivity|null
    */
    public function getApplicationAuthenticationClientSignInActivity(): ?SignInActivity {
        $val = $this->getBackingStore()->get('applicationAuthenticationClientSignInActivity');
        if (is_null($val) || $val instanceof SignInActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationAuthenticationClientSignInActivity'");
    }

    /**
     * Gets the applicationAuthenticationResourceSignInActivity property value. The sign-in activity of the application in a app-only authentication flow (app-to-app tokens) where the application acts like a resource.
     * @return SignInActivity|null
    */
    public function getApplicationAuthenticationResourceSignInActivity(): ?SignInActivity {
        $val = $this->getBackingStore()->get('applicationAuthenticationResourceSignInActivity');
        if (is_null($val) || $val instanceof SignInActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationAuthenticationResourceSignInActivity'");
    }

    /**
     * Gets the delegatedClientSignInActivity property value. The sign-in activity of the application in a delegated flow (user sign-in) where the application acts like a client.
     * @return SignInActivity|null
    */
    public function getDelegatedClientSignInActivity(): ?SignInActivity {
        $val = $this->getBackingStore()->get('delegatedClientSignInActivity');
        if (is_null($val) || $val instanceof SignInActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegatedClientSignInActivity'");
    }

    /**
     * Gets the delegatedResourceSignInActivity property value. The sign-in activity of the application in a delegated flow (user sign-in) where the application acts like a resource.
     * @return SignInActivity|null
    */
    public function getDelegatedResourceSignInActivity(): ?SignInActivity {
        $val = $this->getBackingStore()->get('delegatedResourceSignInActivity');
        if (is_null($val) || $val instanceof SignInActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegatedResourceSignInActivity'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'applicationAuthenticationClientSignInActivity' => fn(ParseNode $n) => $o->setApplicationAuthenticationClientSignInActivity($n->getObjectValue([SignInActivity::class, 'createFromDiscriminatorValue'])),
            'applicationAuthenticationResourceSignInActivity' => fn(ParseNode $n) => $o->setApplicationAuthenticationResourceSignInActivity($n->getObjectValue([SignInActivity::class, 'createFromDiscriminatorValue'])),
            'delegatedClientSignInActivity' => fn(ParseNode $n) => $o->setDelegatedClientSignInActivity($n->getObjectValue([SignInActivity::class, 'createFromDiscriminatorValue'])),
            'delegatedResourceSignInActivity' => fn(ParseNode $n) => $o->setDelegatedResourceSignInActivity($n->getObjectValue([SignInActivity::class, 'createFromDiscriminatorValue'])),
            'lastSignInActivity' => fn(ParseNode $n) => $o->setLastSignInActivity($n->getObjectValue([SignInActivity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastSignInActivity property value. The most recent sign-in activity of the application across delegated or app-only flows where the application is used either as a client or resource.
     * @return SignInActivity|null
    */
    public function getLastSignInActivity(): ?SignInActivity {
        $val = $this->getBackingStore()->get('lastSignInActivity');
        if (is_null($val) || $val instanceof SignInActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSignInActivity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeObjectValue('applicationAuthenticationClientSignInActivity', $this->getApplicationAuthenticationClientSignInActivity());
        $writer->writeObjectValue('applicationAuthenticationResourceSignInActivity', $this->getApplicationAuthenticationResourceSignInActivity());
        $writer->writeObjectValue('delegatedClientSignInActivity', $this->getDelegatedClientSignInActivity());
        $writer->writeObjectValue('delegatedResourceSignInActivity', $this->getDelegatedResourceSignInActivity());
        $writer->writeObjectValue('lastSignInActivity', $this->getLastSignInActivity());
    }

    /**
     * Sets the appId property value. The globally unique appId (also called client ID on the Microsoft Entra admin center) of the credentialed resource application.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the applicationAuthenticationClientSignInActivity property value. The sign-in activity of the application in a app-only authentication flow (app-to-app tokens) where the application acts like a client.
     * @param SignInActivity|null $value Value to set for the applicationAuthenticationClientSignInActivity property.
    */
    public function setApplicationAuthenticationClientSignInActivity(?SignInActivity $value): void {
        $this->getBackingStore()->set('applicationAuthenticationClientSignInActivity', $value);
    }

    /**
     * Sets the applicationAuthenticationResourceSignInActivity property value. The sign-in activity of the application in a app-only authentication flow (app-to-app tokens) where the application acts like a resource.
     * @param SignInActivity|null $value Value to set for the applicationAuthenticationResourceSignInActivity property.
    */
    public function setApplicationAuthenticationResourceSignInActivity(?SignInActivity $value): void {
        $this->getBackingStore()->set('applicationAuthenticationResourceSignInActivity', $value);
    }

    /**
     * Sets the delegatedClientSignInActivity property value. The sign-in activity of the application in a delegated flow (user sign-in) where the application acts like a client.
     * @param SignInActivity|null $value Value to set for the delegatedClientSignInActivity property.
    */
    public function setDelegatedClientSignInActivity(?SignInActivity $value): void {
        $this->getBackingStore()->set('delegatedClientSignInActivity', $value);
    }

    /**
     * Sets the delegatedResourceSignInActivity property value. The sign-in activity of the application in a delegated flow (user sign-in) where the application acts like a resource.
     * @param SignInActivity|null $value Value to set for the delegatedResourceSignInActivity property.
    */
    public function setDelegatedResourceSignInActivity(?SignInActivity $value): void {
        $this->getBackingStore()->set('delegatedResourceSignInActivity', $value);
    }

    /**
     * Sets the lastSignInActivity property value. The most recent sign-in activity of the application across delegated or app-only flows where the application is used either as a client or resource.
     * @param SignInActivity|null $value Value to set for the lastSignInActivity property.
    */
    public function setLastSignInActivity(?SignInActivity $value): void {
        $this->getBackingStore()->set('lastSignInActivity', $value);
    }

}
